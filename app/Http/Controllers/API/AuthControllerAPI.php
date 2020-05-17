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
    //siswa
    public function storeSiswa(Request $request){
        $this->validate($request, [
            'name'       => 'required',
            'email'      => 'required|unique:users',
            'password'   => 'required',
            'phone'      => 'required',
        ],
        [
            'name.required'     => 'Nama harus diisi',
            'email.required'    => 'Email harus diisi',
            'phone.required'    => 'Nomor Handphone harus diisi',
            'password.required' => 'Password harus diisi',

        ]
        );
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'active'    => 0,
            'password'  => Hash::make($request->password),
            'role'      => 'siswa',
            
        ]);
        if($user){
            $user->save();
            $user->sendEmailVerificationNotification();
        }
        return response()->json([
            'status' => 'sukses',
            'result' => $user
        ]);
    }

    //tutor
    public function storeTutor(Request $request)
    {
        $this->validate($request, [
            'name'       => 'required',
            'email'      => 'required|unique:users',
            'password'   => 'required',
            'phone'      => 'required',
        ],
        [
            'name.required'     => 'Nama harus diisi',
            'email.required'    => 'Email harus diisi',
            'phone.required'    => 'Nomor Handphone harus diisi',
            'password.required' => 'Password harus diisi',

        ]
        );
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'active'    => 0,
            'password'  => Hash::make($request->password),
            'role'      => 'tutor',
            
        ]);
        if($user){
            $user->save();
            $user->sendEmailVerificationNotification();
        }
        return response()->json([
            'status' => 'sukses',
            'result' => $user
        ]);
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
            $user->token = $user->createToken('API_Travel')->accessToken;
            $user->save();
            return response()->json([
                'status' => 'sukses',
                'user' => $user,
            ]);
        }else {
            return response()->json(['error' =>'Unauthorized'], 401);   
        }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'status' => 'sukses',
        ]);
    }
}

