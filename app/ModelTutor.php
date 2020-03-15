<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTutor extends Model
{
    protected $table = "model_tutors";

    protected $fillable = [
        'id', 'nama', 'no_telepon', 'jenis_kelamin', 'mata_pelajaran', 'provinsi', 'kota', 'kecamatan',
    ];

    public function tutor()
    {
    	return $this->belongsTo('App\User', 'id');
    }
}