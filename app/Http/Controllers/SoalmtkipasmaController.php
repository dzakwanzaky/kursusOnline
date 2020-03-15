<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalmtkipasmaController extends Controller
{
public function index()
	{
    	        // mengambil data dari table 
		$soalmtkipasma = DB::table('soalmtkipasma')->SimplePaginate(1);
 		$many_data = DB::table('soalmtkipasma')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalmtkipasma',['soalmtkipasma' => $soalmtkipasma,'max_number'=>$many_data]);
 
	}
}
