<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSiswa;
use Auth;
use App\User;
use App\ModelInvoice;
use App\ModelKab;
use App\ModelKecamatan;
use Image;
use App\Provinsi;
use DB;
use Session;
use App\ModelJadwal;

class SiswaController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['verified', 'auth']);
    }
    
    public function daftarSiswa(){
        $data = ModelSiswa::where('status', 'AKTIF')->get();
        return view('dashboard_admin.daftarSiswa', compact('data'));
    }

     
    public function daftarSiswaBelumAktif(){
        $data = ModelSiswa::where('status', 'BELUM AKTIF')->get();
        return view('dashboard_admin.daftarSiswaBelumAktif', compact('data'));
    }

    public function daftarSiswaTidakAktif(){
        $data = ModelSiswa::where('status', 'TIDAK AKTIF')->get();
        return view('dashboard_admin.daftarSiswaTidakAktif', compact('data'));
    }

    public function index(){
        $data = ModelSiswa::all();
        $provinsi = Provinsi::all()->pluck("provinsi", "id");
        return view('base.dataSiswa', compact('data', 'provinsi'));
    }

    public function getKabupaten($id){
       
        $kabupaten = ModelKab::where('provinsi_id', '=', $id)->pluck("kabupaten_kota", "id");
        return json_encode($kabupaten);
    }

    public function getKecamatan($id){
       
        $kecamatan = ModelKecamatan::where('kab_id', '=', $id)->pluck("kecamatan", "id");
        return json_encode($kecamatan);
    }

    
    public function profileSiswa(){
        $data = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $user = User::where('id', '=', Auth::user()->id)->get();
        return view('murid.profile', compact('data', 'user'));
    }

    
    public function profileSiswaAdmin($id){
        $data = ModelSiswa::where('id', $id)->get();
        $jadwal = ModelJadwal::where('murid_id', $id)->get();
        return view('dashboard_admin.profileSiswa', compact('data', 'jadwal'));
    }

    public function store(Request $request)
    {
         $this->validate($request,[
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'alamat_detail' => 'min:10',
            'file' => 'image'
            
       ],

       [
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong',
            'provinsi.required' => 'Provinsi tidak boleh kosong',
            'kabupaten.required' => 'kabupaten tidak boleh kosong',
            'kecamatan.required' => 'kecamatan tidak boleh kosong',
            'alamat_detail.min' => 'Alamat detail minimal 10 karakter',
            'file' => 'Foto profil harus jpg/png'
       ]);

        $data = new ModelSiswa();
        $data->id = $request->id;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $data->file = $nama_file;      
          
        $data->provinsi = $request->provinsi;
        $data->kabupaten = $request->kabupaten;
        $data->kecamatan = $request->kecamatan;
        $data->alamat_detail = $request->alamat_detail;
        $data->status = $request->status;
        $data->save();
        return redirect('/pilihMetode')->withMessage('Kamu Berhasil Daftar Les');
    }

    public function edit($id)
    {
        $data = ModelSiswa::where('id','=',$id)->get();
        return view('murid.editprofile', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelSiswa::where('id',$id)->first();
        $data->provinsi = $request->provinsi;
        $data->kecamatan = $request->kecamatan;
        $data->kabupaten = $request->kabupaten;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;

        $data->status = $request->status;
        if($request->hasFile('file')){
            $request->file('file')->move('data_file/',$request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            
        }
        $data->save();
         if(Auth::user()->role == 'siswa'){
            return redirect('profileMurid')->with('success', 'Data berhasil di ubah');
            } else {
                return redirect('daftarSiswa')->withMessage('Berhasil Konfirmasi');
            }
    }

    public function status(Request $request, $id){
            $data = ModelSiswa::where('id', $id)->first();
            $data->status = $request->status;
            $data->save();
            return redirect('daftarSiswaTidakAktif');
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
  
}
