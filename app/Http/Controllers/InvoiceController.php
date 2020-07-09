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
    
    public function proses_upload(Request $request, $id){
            $this->validate($request,[
            'file' => 'required|mimes: jpg,png,jpeg|max:2048'
       ],
       [
            'file.required' => 'Bukti pembayaran les tidak boleh kosong',
            'file.mimes' => 'Format bukti pembayaran les tidak didukung',
            'file.max' => 'Bukti pembayaran les melebihi 2MB'
       ]);
        if($data = ModelInvoice::where('id',$id)->first()){
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;
        $data->save();
        return view('base/terimakasih');
        }
    }

    public function proses_unggah(Request $request, $id){
        $this->validate($request,[
            'file' => 'required|mimes: jpg,png,jpeg|max:2048'
       ],
       [
            'file.required' => 'Bukti pembayaran les tidak boleh kosong',
            'file.mimes' => 'Format bukti pembayaran les tidak didukung',
            'file.max' => 'Bukti pembayaran les melebihi 2MB'
       ]);
        if($data = ModelInvoice::where('id',$id)->first()){
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;
        $data->save();
        Session::flash('success', 'Bukti pembayaran berhasil di simpan');
        return redirect('/invoice');
        }
    }

public function show(Request $request, $id)
    {
        $data = ModelInvoice::where('id',$id)->first();
        // $data->paket->harga = $request->paket->harga;
        $data->save();
        return view('base/tes', compact('data'));
    }
    



}
