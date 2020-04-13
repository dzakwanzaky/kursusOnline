<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJadwal extends Model
{
    protected $table = "model_jadwals";

    protected $fillable = [
        'id', 'invoice', 'user_id', 'kelas', 'program', 'mata_pelajaran', 'waktu_hari1',  'waktu_hari2',  'waktu_hari3',  'hari'
    ];

    public function jadwal(){
        return $this->belongsTo('App\User', 'murid_id');
    }

    public function tutor(){
        return $this->belongsTo('App\User', 'tutor_id');
    }

    public function invoice(){
        return $this->belongsTo('App\ModelInvoice', 'invoice_id');
    }

    public function siswa(){
        return $this->belongsTo('App\ModelSiswa', 'murid_id');
    }
    
    public function mapel(){
        return $this->belongsTo('App\ModelMapel', 'mapel_id');
    }


  

}
