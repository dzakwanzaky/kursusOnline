<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAbsen;
use App\ModelJadwal;

class AbsenController extends Controller
{
    public function index(){
      
    }

    public function indexPresensi($id){
        $data = ModelAbsen::where('id', $id)->get();
        return view('murid/presensi', compact('data'));
    }

    public function kehadiranLes($id){
        $data = ModelAbsen::where('id_jadwal', $id)->get();
        $jadwal= ModelJadwal::where('id', $id)->get();
        return view('murid.kehadiranLes', compact('data', 'jadwal'));   
    }

    public function kehadiranTutor($id){
        $data = ModelAbsen::where('id_jadwal', $id)->get();
        return view('dashboard_admin.kehadiranTutor', compact('data'));   
    }

    public function kehadiran($id){
        $data = ModelAbsen::where('id_jadwal', $id)->get();
        return view('tutor.kehadiran', compact('data'));   
    }

    public function show($id)
    {
        $data = ModelAbsen::where('id_jadwal', $id)->get();
        $jadwal= ModelJadwal::where('id', $id)->get();
        return view('murid.kehadiranLes', compact('data', 'jadwal'));   
    }

    public function store(Request $request){
        $data = new ModelAbsen();
        $data->id_jadwal = $request->id_jadwal;
        $data->save();
        return redirect()->route('presensi', $data->id);
    }

    public function update(Request $request, $id)
    {
        $data = ModelAbsen::where('id',$id)->first();
        $data->tanggal = $request->tanggal;
        $data->waktu_mulai = $request->waktu_mulai;
        $data->waktu_selesai = $request->waktu_selesai;
        $data->kehadiran = $request->kehadiran;
        $data->report = $request->report;
        $data->save();
        return redirect()->route('kehadiranLes', $data->id_jadwal);
    } 
}
