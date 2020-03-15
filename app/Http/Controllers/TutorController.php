<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelTutor;
use Auth;
use App\User;
use App\ModelSiswa;
use App\ModelKab;
use App\ModelKecamatan;
use App\Provinsi;


class TutorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function daftarTutor(){
        $data = ModelTutor::where('status', 'AKTIF')->get();
        return view('dashboard_admin.daftarTutor', compact('data'));
    }

    public function profileTutorAdmin($id){
        $data = ModelTutor::with('tutor')->where('id', $id)->get();
        return view('dashboard_admin.profileTutor', compact('data'));
    }

    public function statusTutor(Request $request, $id){
        $data = ModelTutor::where('id', $id)->first();
        $data->status = $request->status;
        $data->save();
        return redirect('daftarTutorTidakAktif');
    }

    public function daftarTutorBelumAktif(){
        $data = ModelTutor::where('status', 'MENUNGGU')->get();
        return view('dashboard_admin.daftarTutorBelumAktif', compact('data'));
    }

    public function daftarTutorTidakAktif(){
        $data = ModelTutor::where('status', 'TIDAK AKTIF')->get();
        return view('dashboard_admin.daftarTutorTidakAktif', compact('data'));
    }

    public function index(){
        $data = ModelTutor::all();
        $provinsi = Provinsi::all()->pluck("provinsi", "id");
        return view('base.dataTutor', compact('data', 'provinsi'));
    }

    public function getKabupaten($id){
        $kabupaten = ModelKab::where('provinsi_id', '=', $id)->pluck("kabupaten_kota", "id");
        return json_encode($kabupaten);
    }

    public function getKecamatan($id){
        $kecamatan = ModelKecamatan::where('kab_id', '=', $id)->pluck("kecamatan", "id");
        return json_encode($kecamatan);
    }

    public function profileTutor(){
        $data = ModelTutor::where('id', '=', Auth::user()->id)->get();
        $user = User::where('id', '=', Auth::user()->id)->get();
        return view('tutor.profiletutor', compact('data', 'user'));
    }

    public function informasiTutor(){
        $data = ModelTutor::where('id', '=', Auth::user()->id)->get();
        return view('base.informasiTutor', compact('data',));
    }

    public function store(Request $request)
    {
        $data = new ModelTutor();
        $data->id = $request->id;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->provinsi = $request->provinsi;
        $data->kabupaten = $request->kabupaten;
        $data->kecamatan = $request->kecamatan;
        $data->pendidikan = $request->pendidikan;
        $data->program = $request->program;
        $data->kelas1 = $request->kelas1;
        $data->kelas2 = $request->kelas2;
        $data->kelas3 = $request->kelas3;
        $data->kelas4 = $request->kelas4;
        $data->kelas5 = $request->kelas5;
        $data->kelas6 = $request->kelas6;
        $data->mata_pelajaran1 = $request->mata_pelajaran1;
        $data->mata_pelajaran2 = $request->mata_pelajaran2;
        $data->mata_pelajaran3 = $request->mata_pelajaran3;
        $data->mata_pelajaran4 = $request->mata_pelajaran4;
        $data->mata_pelajaran5 = $request->mata_pelajaran5;
        $data->mata_pelajaran6 = $request->mata_pelajaran6;
        $data->mata_pelajaran7 = $request->mata_pelajaran7;
        $data->mata_pelajaran8 = $request->mata_pelajaran8;
        $data->mata_pelajaran9 = $request->mata_pelajaran9;

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;

        $data->status = $request->status;
        $data->save();
        return redirect('informasiTutor');
    }

    public function edit($id)
    {
        $data = ModelTutor::where('id','=',$id)->get();
        return view('tutor.editprofile', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelTutor::where('id',$id)->first();
        $data->kabupaten = $request->kabupaten;
        $data->kecamatan = $request->kecamatan;
        $data->provinsi = $request->provinsi;
        $data->status = $request->status;
        if($request->foto){
            $foto = $request->file('foto');
            $nama_file = time()."_".$foto->getClientOriginalName();  
            $tujuan_upload = 'data_file';
            $foto->move($tujuan_upload,$nama_file);
            $data->foto = $nama_file;  
         }
        $data->save();
        if(Auth::user()->role == 'tutor'){
            return redirect('profile')->withMessage('Berhasil Konfirmasi');
            } else {
                return redirect('daftarTutor')->withMessage('Berhasil Konfirmasi');
            }
    }

    public function show($id)
     {
     $data = ModelSiswa::where('id','=',$id)->get();
        return view('tutor.detailProfile', compact('data'));
    }
}
