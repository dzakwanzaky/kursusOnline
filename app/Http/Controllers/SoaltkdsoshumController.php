<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoaltkdsoshumController extends Controller
{
    public function index()
	{
    	        // mengambil data dari table 
		$soaltkdsoshum = DB::table('soaltkdsoshum')->SimplePaginate(1);
 		$many_data = DB::table('soaltkdsoshum')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/tkdsoshum',['soaltkdsoshum' => $soaltkdsoshum,'max_number'=>$many_data]);
 
	}
}
