<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMapel extends Model
{
    public function tutor()
    {
    	return $this->hasMany('App\ModelTutor', 'mapel_id');
    }
}
