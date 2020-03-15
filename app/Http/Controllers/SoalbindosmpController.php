<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalbindosmpController extends Controller
{
        public function index()
	{
    	        // mengambil data dari table 
		$soalbindosmp = DB::table('soalbindosmp')->SimplePaginate(1);
 		$many_data = DB::table('soalbindosmp')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalbindosmp',['soalbindosmp' => $soalbindosmp,'max_number'=>$many_data]);
 
	}
}
