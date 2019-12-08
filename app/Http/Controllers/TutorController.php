<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelTutor;

class TutorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function daftarTutor(){
        $data = ModelTutor::all();
        return view('dashboard_admin.daftarTutor', compact('data'));
    }

    public function index(){
        $data = ModelTutor::all();
        return view('base.dataTutor', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new ModelTutor();
        $data->id = $request->id;
        $data->nama_tutor = $request->nama_tutor;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->provinsi = $request->provinsi;
        $data->kota = $request->kota;
        $data->kecamatan = $request->kecamatan;
        $data->status = $request->status;
        $data->save();
        return redirect('tutor');
    }

    public function update(Request $request, $id)
    {
     
        $data = ModelSiswa::where('id',$id)->first();
        $data->status = $request->status;
        $data->save();
        return redirect('admin')->withMessage('Berhasil Konfirmasi');
    }
}
