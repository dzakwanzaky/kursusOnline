<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelTryout;
use App\ModelSoal;


class TryoutController extends Controller
{

    public function index(){
        $data = ModelTryout::all();
        return view('dashboard_admin.daftarTryout', compact('data'));
    }

    public function tambah(){
        return view('dashboard_admin.tambahTryout');
    }

    public function lihatSoal($id){
        $data = ModelSoal::where('id_to', $id)->get();
        return view('dashboard_admin.daftarSoal', compact('data'));   
    }
    
    public function store(Request $request)
    {
        $data = new ModelTryout();
        $data->nama = $request->nama;
        $data->jumlah_soal = $request->jumlah_soal;
        $data->kategori = $request->kategori;
        $data->save();
        return redirect()->route('tambahSoal', $data->id);
    }

    public function edit($id)
    {
        $data = ModelTryout::where('id','=',$id)->get();
        return view('dashboard_admin.editTryout', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelTryout::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->jumlah_soal = $request->jumlah_soal;
        $data->kategori = $request->kategori;
        $data->save();
        return redirect('daftarTryout')->withMessage('Berhasil Konfirmasi');    
    }

    public function destroy($id)
    {
        $data = ModelTryout::where('id',$id)->first();
        $data->delete();
        return redirect()->route('daftarTryout')->with('destroy','Yakin ingin menghapus data?'); 
    }


}
