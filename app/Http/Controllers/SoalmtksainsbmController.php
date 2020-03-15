<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalmtksainsbmController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalmtksainsbm = DB::table('soalmtksainsbm')->SimplePaginate(1);
 		$many_data = DB::table('soalmtksainsbm')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalmtksainsbm',['soalmtksainsbm' => $soalmtksainsbm,'max_number'=>$many_data]);
 
	}
}
