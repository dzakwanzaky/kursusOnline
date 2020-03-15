<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalbiologismaController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalbiologisma = DB::table('soalbiologisma')->SimplePaginate(1);
 		$many_data = DB::table('soalbiologisma')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalbiologisma',['soalbiologisma' => $soalbiologisma,'max_number'=>$many_data]);
 
	}
}
