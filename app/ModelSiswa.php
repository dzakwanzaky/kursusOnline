<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSiswa extends Model
{
    protected $fillable = [
        'id', 'nama_siswa', 'no_telepon', 'jenis_kelamin', 'mata_pelajaran', 'provinsi', 'kota', 'kecamatan',
    ];
}
