<?php

namespace App\Imports;

use App\ModelSoal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SoalImport implements ToModel, WithHeadingRow
{
    public function __construct($id_to) {
        $this->_id_to = $id_to;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ModelSoal([
            'id_to' => $this->_id_to,
            'nomor_soal' => $row['nomor_soal'],
            'file' => $row['gambar'], 
            'soal' => $row['soal'], 
            'option_a' => $row['pilihan_a'], 
            'option_b' => $row['pilihan_b'],
            'option_c' => $row['pilihan_c'],
            'option_d' => $row['pilihan_d'],
            'option_e' => $row['pilihan_e'],
            'jawaban' => $row['jawaban'],
            'pembahasan' => $row['pembahasan'],
        ]);
    }

    public function headingRow(): int
    {
        return 4;
    }
    

}
