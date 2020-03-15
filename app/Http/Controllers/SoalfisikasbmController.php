<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalfisikasbmController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalfisikasbm = DB::table('soalfisikasbm')->SimplePaginate(1);
 		$many_data = DB::table('soalfisikasbm')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalfisikasbm',['soalfisikasbm' => $soalfisikasbm,'max_number'=>$many_data]);
 
	}
}
