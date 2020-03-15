<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoaltkpaController extends Controller
{
    public function index()
	{
    	        // mengambil data dari table 
		$soaltkpa = DB::table('soaltkpa')->SimplePaginate(1);
 		$many_data = DB::table('soaltkpa')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/tkpasoal',['soaltkpa' => $soaltkpa,'max_number'=>$many_data]);
 
	}
}
