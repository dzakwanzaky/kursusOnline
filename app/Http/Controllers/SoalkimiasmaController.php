<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalkimiasmaController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalkimiasma = DB::table('soalkimiasma')->SimplePaginate(1);
 		$many_data = DB::table('soalkimiasma')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalkimiasma',['soalkimiasma' => $soalkimiasma,'max_number'=>$many_data]);
 
	}
}
