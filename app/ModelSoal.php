<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSoal extends Model
{
    protected $fillable = [
        'id_to', 'nomor_soal', 'file', 'soal', 'option_a', 'option_b', 'option_c', 
        'option_d', 'option_e', 'jawaban', 'pembahasan',
    ];
}
