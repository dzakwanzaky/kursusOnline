<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalbingsmpController extends Controller
{
    public function index()
	{
    	        // mengambil data dari table 
		$soalbingsmp = DB::table('soalbingsmp')->SimplePaginate(1);
 		$many_data = DB::table('soalbingsmp')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalbingsmp',['soalbingsmp' => $soalbingsmp,'max_number'=>$many_data]);
 
	}
}
