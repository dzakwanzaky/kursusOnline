<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalbingsbmController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalbingsbm = DB::table('soalbingsbm')->SimplePaginate(1);
 		$many_data = DB::table('soalbingsbm')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalbingsbm',['soalbingsbm' => $soalbingsbm,'max_number'=>$many_data]);
 
	}
}
