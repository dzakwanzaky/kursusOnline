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
            $res['message'] = "sukses";
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
        $provinsi = Provinsi::all();
        return response()->json($provinsi);
    }

    public function getKabupaten($id){
       
        $kabupaten = ModelKab::where('provinsi_id', '=', $id)->get();
        return response()->json($kabupaten);
    }

    public function getKecamatan($id){
       
        $kecamatan = ModelKecamatan::where('kab_id', '=', $id)->get();
        return response()->json($kecamatan);
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if($user->save()){
            $data = ModelSiswa::where('id',$id)->first();
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->provinsi = $request->provinsi;
            $data->kecamatan = $request->kecamatan;
            $data->kabupaten = $request->kabupaten;
            $data->alamat_detail = $request->alamat_detail;
            $data->status = $request->status;
            if($request->file){
                $file = $request->file('file');
                $nama_file = time()."_".$file->getClientOriginalName();  
                $tujuan_upload = 'data_file';
                $file->move($tujuan_upload,$nama_file);
                $data->file = $nama_file;  
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
}
