<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJadwal extends Model
{
    protected $table = "model_jadwals";

    protected $fillable = [
        'id', 'invoice', 'user_id', 'kelas', 'program', 'mata_pelajaran', 'waktu', 'hari'
    ];

    public function jadwal(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function datas(){
        return $this->belongsTo('App\ModelSiswa', 'id');
    }
}
