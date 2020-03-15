<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalbindosbmController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalbindosbm = DB::table('soalbindosbm')->SimplePaginate(1);
 		$many_data = DB::table('soalbindosbm')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalbindosbm',['soalbindosbm' => $soalbindosbm,'max_number'=>$many_data]);
 
	}
}
