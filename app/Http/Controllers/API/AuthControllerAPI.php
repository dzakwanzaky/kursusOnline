<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\SendOTP;
use Auth;
use Laravel\Passport\HasApiTokens;


class AuthControllerAPI extends Controller
{  

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = Auth::user();    
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return $this->registered($request,$user) ?: 
        redirect('/verify?phone='.$request->phone);
 
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phone' => ['required', 'min:10', 'max:13'],
        
        ]);

        $id= $user->id; // Get current user id
        return $user;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function store(Request $request)
    {
                $user = new User;
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->password = Hash::make($request->input('password'));
                $user->phone= $request->input('phone');
                $user->role = $request->input('role');
                $user->active= 0;
        if($user){
            if($user->save()){
                $res['message'] = "Success!";
                $res['value'] = "$user";
                return response($res);
            }
        }
    }

  
    public function update(Request $request, $id)
    {
        $data = User::where('id',$id)->first();
        $data->email = $request->email;
        $data->phone = $request->phone;
        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }

    }

    public function data(){
            $data = User::where('id', '=', Auth::user()->id)->get();
            return response()->json($data);

    }

    public function login(Request $request){
        if(Auth::attempt([
            'email' => request('email'),
            'password' => request('password')
        ])){
            $user = Auth::user();
            return response()->json([
                'status' => 'sukses',
                'user' => $user,
                'token' => $user->createToken('API_Travel')->accessToken     
            ]);
        }else {
            return response()->json(['error' =>'Unauthorized'], 401);   
        }
    }
}