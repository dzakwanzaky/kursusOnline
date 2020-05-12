<?php

namespace App\Http\Controllers\API;

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

class TutorControllerAPI extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //menampilkan profile tutor
    public function dataTutor(){
        $data = ModelTutor::with('tutor')->where('id', '=', Auth::user()->id)->get();
        return response()->json($data);

    }

    //menyimpan data tutor saat registrasi
    public function store(Request $request)
    {
        $data = new ModelTutor();
        $data->id = $request->id;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->provinsi = $request->provinsi;
        $data->kabupaten = $request->kabupaten;
        $data->kecamatan = $request->kecamatan;
        $data->alamat_detail = $request->alamat_detail;
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

        if($request->file){
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();  
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $data->file = $nama_file;
            }
    
            if($request->foto){
                $foto = $request->file('foto');
                $nama_file = time()."_".$foto->getClientOriginalName();  
                $tujuan_upload = 'data_file';
                $foto->move($tujuan_upload,$nama_file);
                $data->foto = $nama_file;  
             }

        $data->status = $request->status;
        if($data->save()){
            $res['message'] = "sukses";
            $res['value'] = "$data";
            return response($res);
        }    
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        
        if($user->save()){
            $data = ModelTutor::where('id',$id)->first();
            $data->kabupaten = $request->kabupaten;
            $data->kecamatan = $request->kecamatan;
            $data->provinsi = $request->provinsi;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->status = $request->status;
            if($request->foto){
                $foto = $request->file('foto');
                $nama_file = time()."_".$foto->getClientOriginalName();  
                $tujuan_upload = 'data_file';
                $foto->move($tujuan_upload,$nama_file);
                $data->foto = $nama_file;  
             }
             if($data->save()){
                if ($user->wasChanged('email') && $user->email) {
                    $user->email_verified_at=NULL;
                    $user->active=0;
                    if($user->save()){
                        $user->sendEmailVerificationNotification();
                        $res['message'] = "sukses";
                        $res['value'] = "$data";
                        return response($res);
                    }    
                }
            }    
        }
    }

    //$provinsi untuk get data provinsi
    //$sd sampai $sma menampilkan data mata pelajaran untuk dipilih tutor
    //$ksd sampai $ksma menampilkan data kelas untuk dipilh tutor
    public function index(){
        $provinsi = Provinsi::all()->pluck("provinsi", "id");
        $sd = ModelMapel::where('id_program', '1')->get();
        $smp = ModelMapel::where('id_program', '2')->get();
        $sma = ModelMapel::where('id_program', '3')->get();
        $sbm = ModelMapel::where('id_program', '4')->get();
        $ksd = ModelKelas::where('id_program', '1')->get();
        $ksmp = ModelKelas::where('id_program', '2')->get();
        $ksma = ModelKelas::where('id_program', '3')->get();
        $program = ModelProgram::all();
        return response()->json(array(
            'sd' => $sd,
            'smp' => $smp,
            'sma' => $sma,
            'sbm' => $sbm,
            'ksd' => $ksd,
            'ksmp' => $ksmp,
            'ksma' => $ksma,
            'program' => $program,
            'provinsi' => $provinsi,
        ));
    }


}
