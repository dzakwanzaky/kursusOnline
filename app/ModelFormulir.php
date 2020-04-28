<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelFormulir extends Model
{
    public function program(){
        return $this->belongsTo('App\ModelProgram', 'program_id');
    }
}
