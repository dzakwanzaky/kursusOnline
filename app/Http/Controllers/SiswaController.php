<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSiswa;

class SiswaController extends Controller
{
    //
    public function index(){
        $data = ModelSiswa::all();
        return view('dashboard_admin.daftarSiswa', compact('data'));
    }
}
