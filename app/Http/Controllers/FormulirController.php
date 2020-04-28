<?php

namespace App\Http\Controllers;
use App\ModelFormulir;


use Illuminate\Http\Request;

class FormulirController extends Controller
{

    public function index(){
        return view('base.endhalaman');
    }

    public function formulirAktif(){
        $data = ModelFormulir::where('status', 'AKTIF')->get();
        return view('dashboard_admin.pendaftaranTryoutAktif', compact('data'));
    }

    public function formulirBelumAktif(){
        $data = ModelFormulir::where('status', 'BELUM AKTIF')->get();
        return view('dashboard_admin.pendaftaranTryoutBelumAktif', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new ModelFormulir();
        $data->namalengkap = $request->namalengkap;
        $data->notelp = $request->notelp;
        $data->asalsekolah = $request->asalsekolah;
        $data->program_id = $request->program_id;
        $data->email = $request->email;
        $data->status = $request->status;

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;

        $data->save();
        return redirect()->route('endhalaman');
    }

    public function update(Request $request, $id)
    {
        $data = ModelFormulir::where('id',$id)->first();
        $data->status = $request->status;
        $data->save();
        return redirect('tryoutAktif')->withMessage('Berhasil Konfirmasi');    
    }

}
