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
        $data->tanggal_lahir = $request->tanggal_lahir;
        
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
        $data = ModelSiswa::with('user')->where('id','=', Auth::user()->id)->get();
        return response()->json(array(
            'data' => [$data] 
        ));
    }

    public function getProvinsi(){
        $provinsi = Provinsi::all()->pluck("provinsi", "id");
        return response()->json($provinsi);
    }

    public function getKabupaten($id){
       
        $kabupaten = ModelKab::where('provinsi_id', '=', $id)->pluck("kabupaten_kota", "id");
        return response()->json($kabupaten);
    }

    public function getKecamatan($id){
       
        $kecamatan = ModelKecamatan::where('kab_id', '=', $id)->pluck("kecamatan", "id");
        return response()->json($kecamatan);
    }

    public function update(Request $request, $id)
    {
        $data = ModelSiswa::where('id',$id)->first();
        $data->nama_siswa = $request->nama_siswa;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
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
