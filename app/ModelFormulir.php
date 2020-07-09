<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelFormulir extends Model
{
    public function tryout(){
        return $this->belongsTo('App\ModelTryout', 'tryout_id');
    }
}
