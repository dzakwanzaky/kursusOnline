<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\ModelSoal;

class SoalController extends Controller
{
    public function index($id){
        return view('dashboard_admin.tambahSoal', compact('id'));
    }
    
    public function show($id)
    {
           
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
            $data->save();
        }  
        return redirect('daftarSoal');
    }

    public function edit($id)
    {
        $data = ModelSoal::where('id','=',$id)->get();
        return view('dashboard_admin.editSoal', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelSoal::where('id',$id)->first();
        $data->id_to = $request->id_to;
        $data->nomor_soal = $request->nomor_soal;
        $data->soal = $request->soal;
        $data->option_a = $request->option_a;
        $data->option_b = $request->option_b;
        $data->option_c = $request->option_c;
        $data->option_d = $request->option_d;
        $data->option_e = $request->option_e;
        $data->jawaban = $request->jawaban;
        $data->save();
        return redirect()->route('daftarSoal', $data->id_to);
    }

    public function destroy($id)
    {
        $data = ModelSoal::where('id',$id)->first();
        $data->delete();
        return redirect()->route('daftarSoal', $data->id_to)->with('destroy','Yakin ingin menghapus data?'); 
    }



}
