<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMapel extends Model
{

    protected $fillable = [
        'id', 'id_program', 'mapel',
    ];

    public function tutor()
    {
    	return $this->hasMany('App\ModelTutor', 'mapel_id');
    }
}
