<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\ModelInvoice;
use Auth;
use App\Image_uploaded;
use App\ModelJadwal;
use App\ModelSiswa;

class InvoiceControllerAPI extends Controller
{
    public function index()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->first();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('id_murid', '=', Auth::user()->id)->get();
        return response()->json(array(
            'data' => $data,
            'alamat' => $alamat, 
            'invoice' => $invoice,
        )); 
    }

    public function proses_upload(Request $request){

        if($data = ModelInvoice::where('id_murid', '=', Auth::user()->id)->first()){
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;
        $data->save();
        return response()->json($data);
        }
    }

}
