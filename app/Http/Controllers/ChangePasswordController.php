<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
use Session;


class ChangePasswordController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('changePassword');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {

        $this->validate($request,[
           'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|min:7',
            'new_confirm_password' => 'same:new_password|required',
        ],
        [
            'current_password.required' => 'Inputan kata sandi lama tidak boleh kosong',
            'current_password.new' => 'Inputan kata sandi lama tidak cocok',
            'new_password.required' => 'Inputan kata sandi baru tidak boleh kosong',
            'new_password.min' => 'Inputan kata sandi baru tidak boleh kurang dari 5 karakter',
            'new_confirm_password.required' => 'Inputan konfirmasi kata sandi tidak boleh kosong',
            'new_confirm_password.same' =>'Inputan konfirmasi kata sandi sama'



        ]);
   


        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        if (auth()->user()->role == 'tutor'){
            return redirect('profile')->withMessage('Berhasil Merubah Data');
            } else if (auth()->user()->role == 'siswa') {
                Session::flash('success', 'Kata sandi berhasil di ubah');

                return redirect('murid');
            } else {
                return redirect('profileAdmin')->withMessage('Berhasil Merubah Data');
            }
    }
}
