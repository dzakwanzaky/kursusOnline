<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\ModelProgram;



class ProgramControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index(){
        $data = ModelProgram::all();
        return response()->json($data);
    }

   
}
