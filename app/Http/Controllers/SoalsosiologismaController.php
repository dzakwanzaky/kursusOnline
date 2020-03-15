<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalsosiologismaController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalsosiologisma = DB::table('soalsosiologisma')->SimplePaginate(1);
 		$many_data = DB::table('soalsosiologisma')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalsosiologisma',['soalsosiologisma' => $soalsosiologisma,'max_number'=>$many_data]);
 
	}
}
