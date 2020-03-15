<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalgeografismaController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalgeografisma = DB::table('soalgeografisma')->SimplePaginate(1);
 		$many_data = DB::table('soalgeografisma')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalgeografisma',['soalgeografisma' => $soalgeografisma,'max_number'=>$many_data]);
 
	}
}
