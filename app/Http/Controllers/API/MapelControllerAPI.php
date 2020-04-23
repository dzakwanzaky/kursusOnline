<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\ModelMapel;



class MapelControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    //melihat seluruh daftar mapel 
    public function index(){
        $data = ModelMapel::all();
        return response()->json($data);
    }

    //melihat daftar mapel berdasarkan program
    public function lihatMapel($id){
        $data = ModelMapel::where('id_program', $id)->get();
        return response()->json($data);
    }


   
}
