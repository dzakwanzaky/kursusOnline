<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SoalmtkipssmaController extends Controller
{
 public function index()
	{
    	        // mengambil data dari table 
		$soalmtkipssma = DB::table('soalmtkipssma')->SimplePaginate(1);
 		$many_data = DB::table('soalmtkipssma')->count('*');
    	        // mengirim data pegawai ke view index
		return view('base/soalmtkipssma',['soalmtkipssma' => $soalmtkipssma,'max_number'=>$many_data]);
 
	}
}
