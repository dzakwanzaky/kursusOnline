<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalipasmpController extends Controller
{
    public function index()
	{
    	        // mengambil data dari table 
		$soalipasmp = DB::table('soalipasmp')->SimplePaginate(1);
 		$many_data = DB::table('soalipasmp')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalipasmp',['soalipasmp' => $soalipasmp,'max_number'=>$many_data]);
 
	}
}
