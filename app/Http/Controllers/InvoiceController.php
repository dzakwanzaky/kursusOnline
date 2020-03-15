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
        if ($data ['program'] == 'SD'){
            return redirect('/pendaftaranProgram1');
        } else if ($data ['program'] == 'SMP'){
            return redirect('/pendaftaranProgram2');
        }else if ($data ['program'] == 'SMA'){
            return redirect('/pendaftaranProgram3');
        }else if ($data ['program'] == 'SBMPTN'){
            return redirect('/pendaftaranProgram4');
        }else if ($data ['program'] == 'Seleksi PTN'){
            return redirect('/pendaftaranProgram5');
        }else if ($data ['program'] == 'CPNS'){
            return redirect('/pendaftaranProgram6');
        } else if ($data ['program'] == 'Bahasa Inggris'){
            return redirect('/pendaftaranProgram7');
        } else if ($data ['program'] == 'Komputer'){
            return redirect('/pendaftaranProgram8');
        } else if ($data ['program'] == 'Mengaji'){
            return redirect('/pendaftaranProgram9');
        }
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

		// menyimpan data file yang diupload ke variabel $file
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
