<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    //
    protected $table = "model_provinsi";
    
    public function model_provinsi(){
    	return $this->hasMany('App\User');
}
}