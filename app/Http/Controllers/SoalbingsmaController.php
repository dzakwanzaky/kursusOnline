<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalbingsmaController extends Controller
{
	public function index()
    {
    	        // mengambil data dari table 
		$soalbingsma = DB::table('soalbingsma')->SimplePaginate(1);
 		$many_data = DB::table('soalbingsma')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalbingsma',['soalbingsma' => $soalbingsma,'max_number'=>$many_data]);
 
	}
}
