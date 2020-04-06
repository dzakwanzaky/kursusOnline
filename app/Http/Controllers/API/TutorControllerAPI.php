<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\ModelTutor;
use Auth;
use App\User;
use App\ModelSiswa;
use App\ModelKab;
use App\ModelKecamatan;

class TutorControllerAPI extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){
        $data = ModelTutor::all();
        return response()->json($data);
    }

    public function profileTutor(){
        $data = ModelTutor::where('id', '=', Auth::user()->id)->get();
        $user = User::where('id', '=', Auth::user()->id)->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = new ModelTutor();
        $data->id = $request->id;
        $data->nama_tutor = $request->nama_tutor;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->kota = $request->kota;
        $data->kecamatan = $request->kecamatan;
        $data->pendidikan = $request->pendidikan;
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


        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;

        $data->status = $request->status;
        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }    
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
        $data->pendidikan = $request->pendidikan;
        $data->mata_pelajaran1 = $request->mata_pelajaran1;
        $data->mata_pelajaran2 = $request->mata_pelajaran2;
        $data->mata_pelajaran3 = $request->mata_pelajaran3;
        $data->mata_pelajaran4 = $request->mata_pelajaran4;
        $data->provinsi = $request->kota;
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
         if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }    
    }

    public function show($id)
     {
     $data = ModelTutor::where('id','=',$id)->get();
     return response()->json($data);
    }
}
