<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelInvoice;
use Auth;

class InvoiceController extends Controller
{
    public function index()
    {
        $data = ModelInvoice::where('murid_id', '=', Auth::user()->id)->get();
        return view('base/paket_program_page', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new ModelInvoice();
        $data->murid_id = $request->murid_id;
        $data->invoice = $request->invoice;
        $data->program = $request->program;
        $data->harga = $request->harga;
        $data->bukti = $request->bukti;
        $data->save();
        if ($data ['program'] == 'PREMIUM'){
            return redirect('/pendaftaranSiswaPrem');
        } else if ($data ['program'] == 'REGULER'){
            return redirect('/pendaftaranSiswaReg');
        }else if ($data ['program'] == 'GOLD'){
            return redirect('/pendaftaranSiswaGold');
        }
    }
    

    public function proses_upload(Request $request){
        if($data = ModelInvoice::where('murid_id', '=', Auth::user()->id)->first()){

		// menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
      	// isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->bukti = $nama_file;
        $data->save();
 
                // upload file
        //$file->move($tujuan_upload,$file->getClientOriginalName());
        return redirect('/invoice');
        }
    }

}
