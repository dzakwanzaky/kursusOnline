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
        return response()->json($data);
    }

    public function lihatSoal($id){
        $data = ModelSoal::where('id_to', $id)->get();
        $datas = ModelTryout::where('id', $id)->get();
        return response()->json($data);
    }

    public function tryoutSD(){
        $bind = ModelTryout::where('program_id', '1')->where('mapel_id', '3')->get();
        $ipa = ModelTryout::where('program_id', '1')->where('mapel_id', '2')->get();
        $mat = ModelTryout::where('program_id', '1')->where('mapel_id', '1')->get();
        return response()->json(array(
            'bind' => $bind,
            'ipa' => $ipa,
            'mat' => $mat,
        ));
    }

    public function tryoutSMP(){
        $mat = ModelTryout::where('program_id', '2')->where('mapel_id', '4')->get();
        $ipa = ModelTryout::where('program_id', '2')->where('mapel_id', '5')->get();
        $ips = ModelTryout::where('program_id', '2')->where('mapel_id', '6')->get();
        $bind = ModelTryout::where('program_id', '2')->where('mapel_id', '7')->get();
        $bing = ModelTryout::where('program_id', '2')->where('mapel_id', '8')->get();
        return response()->json(array(
            'bind' => $bind,
            'ipa' => $ipa,
            'ips' => $ips,
            'mat' => $mat,
            'bing' => $bing,   
        ));
    }

    public function tryoutSMA(){
        $mat = ModelTryout::where('program_id', '3')->where('mapel_id', '9')->get();
        $fis = ModelTryout::where('program_id', '3')->where('mapel_id', '10')->get();
        $kim = ModelTryout::where('program_id', '3')->where('mapel_id', '11')->get();
        $bio = ModelTryout::where('program_id', '3')->where('mapel_id', '12')->get();
        $eko = ModelTryout::where('program_id', '3')->where('mapel_id', '13')->get();
        $sosio = ModelTryout::where('program_id', '3')->where('mapel_id', '14')->get();
        $geo = ModelTryout::where('program_id', '3')->where('mapel_id', '15')->get();
        $sej = ModelTryout::where('program_id', '3')->where('mapel_id', '16')->get();
        $bing = ModelTryout::where('program_id', '3')->where('mapel_id', '17')->get();
        $bind = ModelTryout::where('program_id', '3')->where('mapel_id', '18')->get();
        return response()->json(array(
            'bind' => $bind,
            'mat' => $mat,
            'fis' => $fis,
            'kim' => $kim,
            'bio' => $bio,
            'eko' => $eko,
            'sosio' => $sosio,
            'geo' => $geo,
            'sej' => $sej,
            'bing' => $bing,   
        )); 
    }

    public function tryoutSBMPTN(){
        $soshum = ModelTryout::where('program_id', '4')->where('mapel_id', '19')->get();
        $saintek = ModelTryout::where('program_id', '4')->where('mapel_id', '20')->get();
        $tka = ModelTryout::where('program_id', '4')->where('mapel_id', '21')->get();
        return response()->json(array(
            'soshum' => $soshum,
            'saintek' => $saintek,
            'tka' => $tka,  
        )); 
    
    }

    public function soal($id){
        $data = ModelSoal::where('id_to', $id)->SimplePaginate(1);
        $many_data = ModelSoal::where('id_to', $id)->count();
        return response()->json(array(
            'data' => $data,
            'max_number' => $many_data,
        )); 
    }


}
