<?php

namespace App\Http\Controllers;
use App\ModelFormulir;
use App\Mail\PaymentMail;
use Illuminate\Support\Facades\Mail;


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
        $this->validate($request,[
            'nama_lengkap' => 'required|min:5',
            'no_telp' => 'required|min:11',
            'asal_sekolah' => 'required|min:7',
            'email' => 'required|min:11|email'
       ],
       [
            'nama_lengkap.required' => 'Nama lengkap tidak boleh kosong',
            'nama_lengkap.min' => 'Nama lengkap tidak boleh kurang dari 5 karakter',
            'nama_lengkap.string' => 'Nama lengkap harus berupa huruf',
            'no_telp.required' => 'No telp tidak boleh kosong',
            'no_telp.min' => 'No telp tidak boleh kurang dari 11 angka',
            'no_telp.numeric' => 'No telp harus berisi angka',
            'asal_sekolah.min' => 'Asal sekolah tidak boleh kurang dari 7 karakter',
            'asal_sekolah.required' => 'Asal sekolah tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.min' => 'Email tidak boleh kurang dari 11 karakter',
            'email.email' => 'Email tidak valid',
       ]);
        $data = new ModelFormulir();
        $data->nama_lengkap = $request->nama_lengkap;
        $data->no_telp = $request->no_telp;
        $data->asal_sekolah = $request->asal_sekolah;
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
        Mail::to($data->email)->send(new PaymentMail());
        return redirect('tryoutAktif')->with('success', 'Berhasil Konfirmasi');    
    }

}
