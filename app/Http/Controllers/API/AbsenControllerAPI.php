<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\ModelAbsen;
use App\ModelJadwal;


class AbsenControllerAPI extends Controller
{
    public function index(){
      
    }


    public function show($id){
        $data = ModelAbsen::where('id_jadwal', $id)->get();
        $jadwal= ModelJadwal::where('id', $id)->get();
        return response()->json(array(
            'data' => $data,
            'jadwal' => $jadwal, 
        )); 
    }



}
