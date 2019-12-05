<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJadwal extends Model
{
    protected $table = "model_jadwals";

    protected $fillable = [
        'id', 'kelas', 'program', 'mata_pelajaran', 'waktu', 'lokasi', 'hari'
    ];
}
