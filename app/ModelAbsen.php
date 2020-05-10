<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAbsen extends Model
{
    public function jadwal(){
        return $this->belongsTo('App\ModelJadwal', 'id_jadwal');
    }
}
