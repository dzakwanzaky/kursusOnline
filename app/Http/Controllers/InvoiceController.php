<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelInvoice;
use Auth;
use App\Image_uploaded;

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
        $data->file = $request->file;
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
        $data = ModelInvoice::where('murid_id', '=', Auth::user()->id)->first();
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;
        $data->save();
        return redirect('/invoice');
    }

}
