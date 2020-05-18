<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelInvoice;
use Auth;
use Session;
use App\Image_uploaded;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('base/paket_program_page');
    }

    public function programOnline()
    {
        return view('base/paket_programOnline_page');
    }
    
    public function proses_upload(Request $request){
  
        if($data = ModelInvoice::where('id_murid', '=', Auth::user()->id)->first()){
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;
        $data->save();
        return view('base/terimakasih');
        }
    }

    public function proses_unggah(Request $request){
        if($data = ModelInvoice::where('id_murid', '=', Auth::user()->id)->first()){
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;
        $data->save();
        Session::flash('success', 'Bukti pembayaran berhasil di unggah');
        return redirect('/invoice');
        }
    }




}
