<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTestimoni extends Model
{
    protected $fillable = [
        'murid_id', 'isi',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'murid_id');
    }

    public function siswa()
    {
    	return $this->belongsTo('App\ModelSiswa', 'murid_id');
    }
}
