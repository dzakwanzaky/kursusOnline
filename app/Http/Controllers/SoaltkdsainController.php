<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoaltkdsainController extends Controller
{
    public function index()
	{
    	        // mengambil data dari table 
		$soaltkdsain = DB::table('soaltkdsain')->SimplePaginate(1);
 		$many_data = DB::table('soaltkdsain')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/tkdsaintek',['soaltkdsain' => $soaltkdsain,'max_number'=>$many_data]);
 
	}
}
