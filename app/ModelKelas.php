<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKelas extends Model
{
    protected $table = "model_kelas";

    protected $fillable = [
        'id', 'jenjang',
    ];
}
