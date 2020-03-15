<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSoal;
use App\ModelTryout;

class SoalController extends Controller
{
    public function index($id){
        return view('dashboard_admin.tambahSoal', compact('id'));
    }

    public function store(Request $request)
    {
        foreach ($request->nomor_soal as $key => $value){
            $data = new ModelSoal();
            $data->id_to = $request->id_to;
            $data->nomor_soal = $value;
            $data->soal = $request->soal[$key];
            $data->option_a = $request->option_a[$key];
            $data->option_b = $request->option_b[$key];
            $data->option_c = $request->option_c[$key];
            $data->option_d = $request->option_d[$key];
            $data->option_e = $request->option_e[$key];
            $data->jawaban = $request->jawaban[$key];
            dd($request);
            $data->save();
        }  
        return redirect('daftarTryout');
    }

}
