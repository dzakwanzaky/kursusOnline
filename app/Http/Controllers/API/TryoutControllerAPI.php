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

    public function tambah(){
        return view('dashboard_admin.tambahTryout');
    }

    public function lihatSoal($id){
        $data = ModelSoal::where('id_to', $id)->get();
        $datas = ModelTryout::where('id', $id)->get();
        return response()->json($data);
    }

    public function tryoutSD(){
        $bind = ModelTryout::where('kategori', 'SD')->where('mata_pelajaran', 'Bahasa Indonesia')->get();
        $ipa = ModelTryout::where('kategori', 'SD')->where('mata_pelajaran', 'IPA')->get();
        $mat = ModelTryout::where('kategori', 'SD')->where('mata_pelajaran', 'Matematika')->get();
        $bing = ModelTryout::where('kategori', 'SD')->where('mata_pelajaran', 'Bahasa Inggris')->get();
        return response()->json(array(
            'bind' => $bind,
            'ipa' => $ipa,
            'mat' => $mat,
            'bing' => $bing,
        ));
    }

    public function tryoutSMP(){
        $bind = ModelTryout::where('kategori', 'SMP')->where('mata_pelajaran', 'Bahasa Indonesia')->get();
        $ipa = ModelTryout::where('kategori', 'SMP')->where('mata_pelajaran', 'IPA')->get();
        $mat = ModelTryout::where('kategori', 'SMP')->where('mata_pelajaran', 'Matematika')->get();
        $bing = ModelTryout::where('kategori', 'SMP')->where('mata_pelajaran', 'Bahasa Inggris')->get();
        return response()->json(array(
            'bind' => $bind,
            'ipa' => $ipa,
            'mat' => $mat,
            'bing' => $bing,   
        ));
    }

    public function tryoutSMA(){
        $bind = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Bahasa Indonesia')->get();
        $mat = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Matematika')->get();
        $fis = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Fisika')->get();
        $kim = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Kimia')->get();
        $bio = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Biolgi')->get();
        $eko = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Ekonomi')->get();
        $sosio = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Sosiologi')->get();
        $geo = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Geografi')->get();
        $sej = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Sejarah')->get();
        $bing = ModelTryout::where('kategori', 'SMA')->where('mata_pelajaran', 'Bahasa Inggris')->get();
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
        $bind = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Bahasa Indonesia')->get();
        $mat = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Matematika')->get();
        $fis = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Fisika')->get();
        $kim = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Kimia')->get();
        $bio = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Biolgi')->get();
        $eko = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Ekonomi')->get();
        $sosio = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Sosiologi')->get();
        $geo = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Geografi')->get();
        $sej = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Sejarah')->get();
        $bing = ModelTryout::where('kategori', 'SBMPTN')->where('mata_pelajaran', 'Bahasa Inggris')->get();
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

    public function soal($id){
        $data = ModelSoal::where('id_to', $id)->SimplePaginate(1);
        $many_data = ModelSoal::where('id_to', $id)->count();
        return view('base/soal',['data' => $data,'max_number'=>$many_data]);
        //paginantion api
    }


}