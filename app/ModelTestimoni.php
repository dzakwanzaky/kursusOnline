<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTestimoni extends Model
{
    protected $table = "model_testimonis";

    protected $fillable = [
        'id', 'nama_lengkap', 'isi','program'];
}
