<?php

namespace App\Http\Controllers\API;
use App\ModelFormulir;


use Illuminate\Http\Request;

class FormulirControllerAPI extends Controller
{
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
        if($data->save()){
            $res['message'] = "sukses";
            $res['value'] = "$data";
            return response($res);
        }
    }

}
