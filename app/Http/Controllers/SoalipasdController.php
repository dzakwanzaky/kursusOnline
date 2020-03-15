<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalipasdController extends Controller
{
     public function index()
	{
    	        // mengambil data dari table 
		$soalipasd = DB::table('soalipasd')->SimplePaginate(1);
 		$many_data = DB::table('soalipasd')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalipasd',['soalipasd' => $soalipasd,'max_number'=>$many_data]);
 
	}
}
