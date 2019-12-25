<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSiswa;
use Auth;
use App\User;
use App\ModelInvoice;
use App\Provinsi;
use Image;

class SiswaController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function daftarSiswa(){
        // $data = ModelSiswa::all();
        $data = ModelSiswa::with('files')->get();
        return view('dashboard_admin.daftarSiswa', compact('data'));
    }

    public function index(){
        $data = ModelSiswa::all();
        return view('base.dataSiswa', compact('data'));
    }

    
    public function profileSiswa(){
        $data = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $user = User::where('id', '=', Auth::user()->id)->get();
        return view('murid.profile', compact('data', 'user'));
    }

    public function store(Request $request)
    {
        $data = new ModelSiswa();
        $data->id = $request->id;
        $data->nama_siswa = $request->nama_siswa;
        $data->jenis_kelamin = $request->jenis_kelamin;
        
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;      
          
        $data->provinsi = $request->provinsi;
        $data->kota = $request->kota;
        $data->kecamatan = $request->kecamatan;
        $data->status = $request->status;
        $data->save();
        return redirect('murid')->withMessage('Kamu Berhasil Daftar Les');
    }

    public function edit($id)
    {
        $data = ModelSiswa::where('id','=',$id)->get();
        return view('murid.editprofile', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelSiswa::where('id',$id)->first();
        $data->nama_siswa = $request->nama_siswa;
        $data->provinsi = $request->provinsi;
        $data->kecamatan = $request->kecamatan;
        $data->kota = $request->kota;
        $data->status = $request->status;
        if($request->file){
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();  
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $data->file = $nama_file;  
        }
        $data->save();
        if(Auth::user()->role == 'siswa'){
            return redirect('profileMurid')->withMessage('Berhasil Konfirmasi');
            } else {
                return redirect('daftarSiswa')->withMessage('Berhasil Konfirmasi');
            }
    }

    public function dashboard()
    {
        if (Auth::user()->role == 'siswa') { // Role Guru
            return view('murid.murid');
        } elseif (Auth::user()->role == 'tutor') { // Role Murid
            return view('tutor.tutor');
        } elseif (Auth::user()->role == 'admin') { // Role Admin
            return view('dashboard_admin.admin');
        }
               
    }

    public function json()
    {
        $data = Provinsi::all();
        $provinsi = $data->pluck('provinsi');
        $provinsi->all();
        return response()->json($provinsi);
    }

    // public function show($id)
    // {
    //     $data = ModelSiswa::where('id','=',$id)->get();
    //     return view('tutor.detailProfile', compact('data'));
    // }
}
