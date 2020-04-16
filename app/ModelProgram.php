<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProgram extends Model
{
    protected $table = "model_programs";

    protected $fillable = [
        'id', 'program', 'harga', 'jumlah_pertemuan',
    ];

    public function paket()
    {
    	return $this->hasMany('App\ModelPaket', 'program_id');
    }
}
