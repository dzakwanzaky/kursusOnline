<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalmtksmpController extends Controller
{
   public function index()
	{
    	        // mengambil data dari table 
		$soalmtksmp = DB::table('soalmtksmp')->SimplePaginate(1);
 		$many_data = DB::table('soalmtksmp')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalmtksmp',['soalmtksmp' => $soalmtksmp,'max_number'=>$many_data]);
 
	}
}
