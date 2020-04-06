<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketanController extends Controller
{
   public function index(Request $request)
   {
   		$datas = ModelPaket::where('program', 'SD')->get();
        return view('base/paket', compact(['datas']));
   }
}
