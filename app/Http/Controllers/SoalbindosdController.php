<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalbindosdController extends Controller
{
    public function index()
	{
    	        // mengambil data dari table 
		$soalbindosd = DB::table('soalbindosd')->SimplePaginate(1);
 		$many_data = DB::table('soalbindosd')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalbindosd',['soalbindosd' => $soalbindosd,'max_number'=>$many_data]);
 
	}
}
