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
        $nomor = ModelInvoice::where('murid_id', '=', Auth::user()->id)->get();
        return view('murid/invoicenya', compact('data', 'alamat', 'nomor'));
    }

    public function data()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('murid_id', '=', Auth::user()->id)->get();
        return view('murid/invoice', compact('data', 'alamat', 'invoice'));
    }

    public function cetak()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $nomor = ModelInvoice::where('murid_id', '=', Auth::user()->id)->get();

        $pdf = PDF::loadView('murid/invoicenya', ['data'=>$data], ['alamat'=>$alamat], ['nomor'=>$nomor])->setPaper('A4');;
        return $pdf->stream('invoice');
    }
}
