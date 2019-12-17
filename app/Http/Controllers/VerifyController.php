<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use AuthenticatesUsers;
use Auth;

//use App\Http\Controllers\ProgramController;

class VerifyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getVerify(){
        return view('verify');
    }
    public function postVerify(Request $request){
        if($user=User::where('code',$request->code)->first()){
            $user->active=1;
            $user->code=null;
            $user->save();
            Auth::login($user, true);
            if($user->role=='siswa')
            {
             return redirect('/paketProgram')->withMessage('Your account is active');
            } else {
            return redirect('/dataTutor');
            }
        }
        else{
            return back()->withMessage('verify code is not correct. Please try again');
        }
    }

}