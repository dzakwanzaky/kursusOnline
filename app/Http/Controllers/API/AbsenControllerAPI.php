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
        $data = ModelAbsen::with('jadwal')->where('id_jadwal', $id)->get();
        return response()->json(array(
            'data' => $data,
        )); 
    }

    public function store(Request $request){
        $data = new ModelAbsen();
        $data->id_jadwal = $request->id_jadwal;
        $data->tanggal = $request->tanggal;
        $data->waktu_mulai = $request->waktu_mulai;
        $data->waktu_selesai = $request->waktu_selesai;
        $data->kehadiran = $request->kehadiran;
        $data->report = $request->report;
        if($data->save()){
            $res['message'] = "sukses";
            $res['value'] = "$data";
            return response($res);
        }    
    }



}
