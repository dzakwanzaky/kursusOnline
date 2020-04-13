<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTryout extends Model
{
    public function program(){
        return $this->belongsTo('App\ModelProgram', 'program_id');
    }

    public function mapel(){
        return $this->belongsTo('App\ModelMapel', 'mapel_id');
    }

}
