<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMatpel extends Model
{
    protected $table = "model_matpels";

    protected $fillable = [
        'id', 'nama'
    ];
}
