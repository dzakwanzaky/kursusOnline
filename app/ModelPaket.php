<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPaket extends Model
{
    public function paket()
    {
    	return $this->belongsTo('App\ModelProgram', 'program_id');
    }
}
