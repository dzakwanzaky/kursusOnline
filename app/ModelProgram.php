<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProgram extends Model
{
    protected $table = "model_programs";

    protected $fillable = [
        'id', 'program', 'harga',
    ];
}
