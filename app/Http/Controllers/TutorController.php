<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelTutor;
use Auth;
use App\User;

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

    public function profileTutor(){
        $data = ModelTutor::where('id', '=', Auth::user()->id)->get();
        $user = User::where('id', '=', Auth::user()->id)->get();
        return view('tutor.profiletutor', compact('data', 'user'));
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
        $data->pendidikan = $request->pendidikan;
        $data->kelas = $request->kelas;
        $data->mata_pelajaran = $request->mata_pelajaran;

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;
        
        $data->status = $request->status;
        $data->save();
        return redirect('tutor');
    }

    public function edit($id)
    {
        $data = ModelTutor::where('id','=',$id)->get();
        return view('tutor.editprofile', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelTutor::where('id',$id)->first();
        $data->nama_tutor = $request->nama_tutor;
        $data->provinsi = $request->kota;
        $data->kecamatan = $request->kecamatan;
        $data->status = $request->status;
        $data->save();
        return redirect('profile')->withMessage('Berhasil Konfirmasi');
    }
}
