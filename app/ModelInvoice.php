<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelInvoice extends Model
{
    protected $table = "model_invoice";

    protected $fillable = [
        'id', 'invoice', 'murid_id', 'program', 'harga', 'bukti'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_murid');
    }

    public function jadwal(){
        return $this->hasOne('App\ModelJadwal', 'invoice_id');
    }

    public function siswa(){
        return $this->belongsTo('App\ModelSiswa', 'id_murid');
    }
   
}
