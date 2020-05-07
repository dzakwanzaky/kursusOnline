<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSiswa extends Model
{
    protected $fillable = [
        'id', 'nama_siswa', 'no_telepon', 'mata_pelajaran', 'provinsi', 'kota', 'kecamatan',
    ];

    public function siswa()
    {
    	return $this->hasOne('App\ModelJadwal', 'murid_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'id');
    }

    public function files()
    {
    	return $this->hasOne('App\ModelInvoice', 'id_murid');
    }

}
