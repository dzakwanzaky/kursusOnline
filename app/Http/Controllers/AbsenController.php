<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAbsen;
use App\ModelJadwal;
use Session;

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
        $this->validate($request,[
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'materi' => 'required|min:10',
            'report' => 'required|min:10',
       ],
       [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'waktu_mulai.required' =>  'waktu mulai boleh kosong',
            'waktu_selesai.required' => 'waktu selesai tidak boleh kosong',
            'materi.required' => 'Materi tidak boleh kosong',
            'materi.min' => 'Masukan rincian materi minimal 10 karakter',
            'report.required' => 'Penilaian tidak boleh kosong',
            'report.min' => 'Saran dan masukan minimal 5 karakter',
            
       ]);
        $data = ModelAbsen::where('id',$id)->first();
        $data->tanggal = $request->tanggal;
        $data->waktu_mulai = $request->waktu_mulai;
        $data->waktu_selesai = $request->waktu_selesai;
        $data->kehadiran = $request->kehadiran;
        $data->materi = $request->materi;
        $data->report = $request->report;
        $data->save();
        Session::flash('success', 'Absensi berhasil disimpan');
        return redirect()->route('kehadiranLes', $data->id_jadwal);
    } 

    public function destroy($id)
    {
        $data = ModelAbsen::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kehadiranTutor', $data->id_jadwal)->with('success','Data Berhasil Dihapus!'); 
    }
}
