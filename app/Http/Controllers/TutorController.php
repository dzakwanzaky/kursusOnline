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
use App\ModelJadwal;
use App\ModelKelas;
use App\ModelMapel;
use App\ModelProgram;


class TutorController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    public function daftarTutor(){
        $data = ModelTutor::where('status', 'AKTIF')->get();
        return view('dashboard_admin.daftarTutor', compact('data'));
    }

    public function profileTutorAdmin($id){
        $data = ModelTutor::with('tutor')->where('id', $id)->get();
        $matpel = ModelTutor::with('tutor')->where('id', $id)->pluck('mapel_id');
        $jadwal = ModelJadwal::where('tutor_id', $id)->get();
        return view('dashboard_admin.profileTutor', compact('data', 'jadwal', 'matpel'));
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
        $sd = ModelMapel::where('id_program', '1')->get();
        $smp = ModelMapel::where('id_program', '2')->get();
        $sma = ModelMapel::where('id_program', '3')->get();
        $sbm = ModelMapel::where('id_program', '4')->get();
        $ksd = ModelKelas::where('id_program', '1')->get();
        $ksmp = ModelKelas::where('id_program', '2')->get();
        $ksma = ModelKelas::where('id_program', '3')->get();
        $program = ModelProgram::all();
        return view('base.dataTutor', compact('data', 'provinsi', 'sd', 'smp', 'sma', 'sbm', 'program', 'ksd', 'ksmp', 'ksma'));
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
        return view('base.informasiTutor', compact('data'));
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
        $data->program_id = $request->program_id;

        $array = array();
        foreach($request->kelas_id as $kelas_id){
            array_push($array, $kelas_id);
        }
        $data->kelas_id = json_encode($array);
        
        $array = array();
        foreach($request->mapel_id as $mapel_id){
            array_push($array, $mapel_id);
        }
        $data->mapel_id = json_encode($array);

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
