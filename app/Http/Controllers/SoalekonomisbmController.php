<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalekonomisbmController extends Controller
{
	public function index()
{
    	        // mengambil data dari table 
		$soalekonomisbm = DB::table('soalekonomisbm')->SimplePaginate(1);
 		$many_data = DB::table('soalekonomisbm')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalekonomisbm',['soalekonomisbm' => $soalekonomisbm,'max_number'=>$many_data]);
 
	}
}
