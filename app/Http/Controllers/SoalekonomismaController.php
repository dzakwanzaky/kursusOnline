<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalekonomismaController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalekonomisma = DB::table('soalekonomisma')->SimplePaginate(1);
 		$many_data = DB::table('soalekonomisma')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalekonomisma',['soalekonomisma' => $soalekonomisma,'max_number'=>$many_data]);
 
	}
}
