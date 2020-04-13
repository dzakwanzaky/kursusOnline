<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTutor extends Model
{
    protected $table = "model_tutors";

    protected $fillable = [
        'id', 'nama', 'no_telepon', 'jenis_kelamin', 'mata_pelajaran', 'provinsi', 'kota', 'kecamatan',
    ];

   
    public function tutor()
    {
    	return $this->belongsTo('App\User', 'id');
    }

    public function mapel()
    {
    	return $this->belongsTo('App\ModelMapel', 'mapel_id')->toJSON();
    }

    public function program()
    {
    	return $this->belongsTo('App\ModelProgram', 'program_id');
    }

    public function kelas()
    {
    	return $this->belongsTo('App\ModelKelas', 'kelas_id');
    }

}