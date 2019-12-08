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
        return view('base/pendaftaranSiswaGold_page', compact('data'));
    }
    
    public function reg(Request $request)
    {
        $data = new ModelInvoice();
        $data->murid_id = $request->murid_id;
        $data->invoice = $request->invoice;
        $data->program = $request->program;
        $data->harga = $request->harga;
        $data->bukti = $request->bukti;
        $data->save();
        return redirect('pendaftaranSiswaReg');
    }

    public function prem(Request $request)
    {
        $data = new ModelInvoice();
        $data->murid_id = $request->murid_id;
        $data->invoice = $request->invoice;
        $data->program = $request->program;
        $data->harga = $request->harga;
        $data->bukti = $request->bukti;
        $data->save();
        return redirect('pendaftaranSiswaPrem');
    }

    public function gold(Request $request)
    {
        $data = new ModelInvoice();
        $data->murid_id = $request->murid_id;
        $data->invoice = $request->invoice;
        $data->program = $request->program;
        $data->harga = $request->harga;
        $data->bukti = $request->bukti;
        $data->save();
        return redirect('pendaftaranSiswaGold');
    }
}
