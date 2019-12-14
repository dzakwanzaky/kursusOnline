<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelInvoice extends Model
{
    protected $table = "model_invoice";

    protected $fillable = [
        'id', 'invoice', 'murid_id', 'program', 'harga', 'file'
    ];
}
