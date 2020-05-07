<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class ProfilMuridController extends Controller
{
    public function index(){
    	$user = User::where('id', '=', Auth::user()->id)->get();

        return view('murid.profilMurid', compact('user'));
    }
     public function edit($id)
    {
        $user = User::where('id', '=', Auth::user()->id)->get();
        return view('murid.editProfil', compact('user'));
    }
    public function update(Request $request,$id)
    {
     $this->validate($request,[
            'name' => 'required|min:5|string',
            'phone' => 'required|min:11',
            'email' => 'required|min:7|email',
            'avatar' => 'image'
       ],
       [
            'name.required' => 'Nama lengkap tidak boleh kosong',
            'name.min' => 'Nama lengkap tidak boleh kurang dari 5 karakter',
            'name.string' => 'Nama lengkap harus berupa huruf',
            'phone.required' => 'No telp tidak boleh kosong',
            'phone.min' => 'No telp tidak boleh kurang dari 11 angka',
            'phone.numeric' => 'No telp harus berisi angka',
            'email.required' => 'Email tidak boleh kosong',
            'email.min' => 'Email tidak boleh kurang dari 11 karakter',
            'email.email' => 'Email tidak valid',
            'avatar.image' => 'Foto profil harus jpg/png',
            
       ]);

    	$user = User::where('id',$id)->first();
    	$user->name = $request->name;
    	$user->phone = $request->phone;
    	$user->email = $request->email;
        $user->jenis_kelamin = $request->jenis_kelamin;

        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $user->avatar = $request->file('avatar')->getClientOriginalName();
            
        }
        $user->save();

        Session::flash('success', 'Perubahan data berhasil di lakukan');

        return redirect('/profilMurid');
    }
}
