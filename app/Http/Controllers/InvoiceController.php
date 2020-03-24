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

    public function update(Request $request, $id)
    {
        $data = ModelInvoice::where('id',$id)->first();
        $data->harga = $request->harga;
        $data->save();
        return redirect('murid')->withMessage('Berhasil Mendaftar'); 
    }

    

    public function proses_upload(Request $request){
        if($data = ModelInvoice::where('murid_id', '=', Auth::user()->id)->first()){
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;
        $data->save();
        return redirect('/invoice');
        }
    }

}
