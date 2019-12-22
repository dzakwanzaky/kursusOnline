<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelJadwal;
use App\ModelSiswa;
use App\ModelInvoice;
use Auth;
use PDF;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('murid_id', '=', Auth::user()->id)->get();
        return view('murid/invoicenya', compact('data', 'alamat', 'invoice'));
    }

    public function store(Request $request)
    {
        $data = new ModelJadwal();
        $data->program = $request->program;
        $data->fasilitas = $request->fasilitas;
        $data->durasi = $request->durasi;
        $data->jumlah_pertemuan = $request->jumlah_pertemuan;
        $data->harga = $request->harga;
        $data->save();
        return redirect('dataSiswa')->withMessage('Kamu Berhasil Daftar Les');
    }

    public function update(Request $request, $id)
    {
        $data = ModelSiswa::where('id',$id)->first();
        $data->program = $request->program;
        $data->fasilitas = $request->fasilitas;
        $data->durasi = $request->durasi;
        $data->jumlah_pertemuan = $request->jumlah_pertemuan;
        $data->harga = $request->harga;
        $data->save();
    }


    public function data()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('murid_id', '=', Auth::user()->id)->get();
        return view('murid/invoice', compact('data', 'alamat', 'invoice'));
    }

    public function pdf()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('murid_id', '=', Auth::user()->id)->get();

        $pdf = PDF::loadView('murid/invoicenya', ['data'=>$data, 'alamat'=>$alamat, 'invoice'=>$invoice])->setPaper('A4');
        return $pdf->stream('invoice');
    }
}


