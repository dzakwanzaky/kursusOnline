<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelJadwal;
use App\User;
use Auth;

class BaseController extends Controller
{
    //
    public function index(){
        return view('base/home_page');
    }

  }

  //     dd(ModelJadwal::where('user_id','=', $user_id)->get());
    //         if(ModelJadwal::where('user_id','=', Auth::user()->id)->get() != null){
    //         //code return true if u have paket
    //         return redirect('murid');
    //     }

    //     else{
    //         return redirect('paketProgram');  
    //          }