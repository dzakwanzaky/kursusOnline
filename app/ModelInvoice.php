<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelInvoice extends Model
{
    protected $table = "model_invoice";

    protected $fillable = [
        'id', 'invoice', 'id_murid', 'program_id','kategori','kelas_id','jumlah_sesi','jumlah_mapel','harga', 'file'
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

    public function program(){
        return $this->belongsTo('App\ModelProgram', 'program_id');
    }

    public function kelas(){
        return $this->belongsTo('App\ModelKelas', 'kelas_id');
    }

    public function paket(){
        return $this->belongsTo('App\ModelPaket', 'paket_id');
    }
   
}
