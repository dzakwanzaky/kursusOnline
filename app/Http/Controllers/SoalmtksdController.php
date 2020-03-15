<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalmtksdController extends Controller
{
     public function index()
	{
    	        // mengambil data dari table 
		$soalmtksd = DB::table('soalmtksd')->SimplePaginate(1);
 		$many_data = DB::table('soalmtksd')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalmtksd',['soalmtksd' => $soalmtksd,'max_number'=>$many_data]);
 
	}
}
