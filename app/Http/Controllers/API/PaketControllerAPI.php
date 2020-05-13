<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\ModelPaket;
use App\ModelProgram;

class PaketControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function index(){
        $data = ModelPaket::all();
        return response()->json($data);
    }

    public function paket($id){
        $data = ModelPaket::where('program_id', $id)->get();
        return response()->json($data);
    }
}
    