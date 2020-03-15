<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalipssmaController extends Controller
{
public function index()
	{
    	        // mengambil data dari table 
		$soalipssma = DB::table('soalipssma')->SimplePaginate(1);
 		$many_data = DB::table('soalipssma')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalipssma',['soalipssma' => $soalipssma,'max_number'=>$many_data]);
 
	}
}
