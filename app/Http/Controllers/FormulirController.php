<?php

namespace App\Http\Controllers;
use App\ModelFormulir;


use Illuminate\Http\Request;

class FormulirController extends Controller
{

    public function index(){
        return view('base.endhalaman');
    }
    public function store(Request $request)
    {
        $data = new ModelFormulir();
        $data->namalengkap = $request->namalengkap;
        $data->notelp = $request->notelp;
        $data->asalsekolah = $request->asalsekolah;
        $data->email = $request->email;

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;

        $data->save();
        return redirect()->route('endhalaman');
    }
}
