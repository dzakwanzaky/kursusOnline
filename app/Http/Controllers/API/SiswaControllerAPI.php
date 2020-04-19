<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\ModelSiswa;
use Auth;
use App\User;
use App\ModelInvoice;
use App\ModelKab;
use App\ModelKecamatan;
use Image;
use App\Provinsi;
use DB;

class SiswaControllerAPI extends Controller
{


    public function store(Request $request)
    {
        $data = new ModelSiswa();
        $data->id = $request->id;
        $data->nama_siswa = $request->nama_siswa;
        $data->jenis_kelamin = $request->jenis_kelamin;
        
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;      
          
        $data->provinsi = $request->provinsi;
        $data->kabupaten = $request->kabupaten;
        $data->kecamatan = $request->kecamatan;
        $data->alamat_detail = $request->alamat_detail;
        $data->status = $request->status;
        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }    
    }

    public function siswa()
    {
        $data = ModelSiswa::where('id','=', Auth::user()->id)->get();
        $user = User::where('id', '=', Auth::user()->id)->get();
        return response()->json(array(
            'data' => $data,
            'user' => $user,  
        ));
    }


    public function update(Request $request, $id)
    {
        $data = ModelSiswa::where('id',$id)->first();
        $data->nama_siswa = $request->nama_siswa;
        $data->provinsi = $request->provinsi;
        $data->kecamatan = $request->kecamatan;
        $data->kabupaten = $request->kabupaten;
        $data->status = $request->status;
        if($request->file){
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();  
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $data->file = $nama_file;  
        }
        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
    }

    public function profileSiswa(){
        $data = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $user = User::where('id', '=', Auth::user()->id)->get();
        return response()->json($data);
    }
}
