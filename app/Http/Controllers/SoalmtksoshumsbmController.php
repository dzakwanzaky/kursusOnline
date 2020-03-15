<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalmtksoshumsbmController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalmtksoshumsbm = DB::table('soalmtksoshumsbm')->SimplePaginate(1);
 		$many_data = DB::table('soalmtksoshumsbm')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalmtksoshumsbm',['soalmtksoshumsbm' => $soalmtksoshumsbm,'max_number'=>$many_data]);
 
	}
}
