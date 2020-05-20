<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\ModelTestimoni;
use App\User;
class TestimoniControllerAPI extends Controller
{

    public function index()
    {
        $data = ModelTestimoni::with('siswa', 'user')->get();
        return response()->json(array(
            'status'    => 'sukses',
            'result'    => $data
        )); 
    }

   
}
