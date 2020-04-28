<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProgram extends Model
{
    protected $table = "model_programs";

    protected $fillable = [
        'program','keterangan','keterangan_rinci','avatar'
    ];
    
    public function getAvatar()
    {
    	if(!$this->avatar){
    		return asset('images/inofa.png');
    	}
    	return asset('images/'.$this->avatar);
    }
    public function paket()
    {
    	return $this->hasMany('App\ModelPaket', 'program_id');
    }
}
