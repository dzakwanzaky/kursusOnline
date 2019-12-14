<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelJadwal;
use App\ModelSiswa;
use Auth;

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
        return view('murid/invoicenya', compact('data', 'alamat'));
    }
}
