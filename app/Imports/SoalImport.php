<?php

namespace App\Imports;

use App\ModelSoal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SoalImport implements ToModel
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
            'nomor_soal' => $row[0],
            'file' => $row[1], 
            'soal' => $row[2], 
            'option_a' => $row[3], 
            'option_b' => $row[4],
            'option_c' => $row[5],
            'option_d' => $row[6],
            'option_e' => $row[7],
            'jawaban' => $row[8],
            'pembahasan' => $row[9],
        ]);
    }
    

}
