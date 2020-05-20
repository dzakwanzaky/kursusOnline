<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\ModelTryout;
use App\ModelSoal;
use DB;

class TryoutControllerAPI extends Controller
{

    public function index(){
        $data = ModelTryout::all();
        return response()->json(array(
            'status'    => 'sukses',
            'result'    => $data
        )); 
    }

    public function tryout($id_program, $id)
    {
     $data = ModelTryout::where('program_id', $id_program)->where('mapel_id', $id)->get();
     return response()->json(array(
        'status'    => 'sukses',
        'result'    => $data
        )); 
    }

    public function lihatSoal($id){
        $data = ModelSoal::where('id_to', $id)->get();
        $datas = ModelTryout::where('id', $id)->get();
        return response()->json(array(
            'status'    => 'sukses',
            'result'    => $data
        )); 
    }

    public function soal($id){
        $data = ModelSoal::where('id_to', $id)->SimplePaginate(1);
        $many_data = ModelSoal::where('id_to', $id)->count();
        return response()->json(array(
            'status' => 'sukses',
            'result' => $data,
            'max_number' => $many_data,
        )); 
    }


}
