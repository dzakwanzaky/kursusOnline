<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalbiologisbmController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalbiologisbm = DB::table('soalbiologisbm')->SimplePaginate(1);
 		$many_data = DB::table('soalbiologisbm')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalbiologisbm',['soalbiologisbm' => $soalbiologisbm,'max_number'=>$many_data]);
 
	}
}
