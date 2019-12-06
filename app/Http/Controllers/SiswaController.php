<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSiswa;
use Auth;

class SiswaController extends Controller
{
    //
    public function index(){
        $data = ModelSiswa::where('status', 'Menunggu Pembayaran')->get();
        return view('dashboard_admin.daftarSiswa', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new ModelSiswa();
        $data->nama_siswa = $request->nama_siswa;
        $data->no_telepon = $request->no_telepon;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->provinsi = $request->provinsi;
        $data->kota = $request->kota;
        $data->kecamatan = $request->kecamatan;
        $data->status = $request->status;
        $data->save();
        return redirect('murid')->withMessage('Kamu Berhasil Daftar Les');
    }

    public function update(Request $request, $id)
    {
     
        $data = ModelSiswa::where('id',$id)->first();
        $data->status = $request->status;
        $data->save();
        return redirect('admin')->withMessage('Berhasil Konfirmasi');
    }
}
