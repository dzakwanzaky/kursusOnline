<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelJadwal;
use Auth;
use App\ModelSiswa;
use App\ModelTutor;
use App\ModelInvoice;


class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $datas = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        return view('murid.murid', compact('data', 'datas'));
    }

    public function tutor()
    {
        $data = ModelTutor::where('id', '=', Auth::user()->id)->first();
        $jadwal = ModelJadwal::with('invoice')
        ->whereHas('invoice', function($q) use ($data)
        {$q-> whereIn('program', [$data->program]);}
        )
        ->whereIn('mata_pelajaran', [$data->mata_pelajaran1, $data->mata_pelajaran2, $data->mata_pelajaran3, $data->mata_pelajaran4, 
        $data->mata_pelajaran5, $data->mata_pelajaran6, $data->mata_pelajaran7, $data->mata_pelajaran8, $data->mata_pelajaran9])
        ->where('status', 'MENUNGGU')->get();
        return view('tutor.tutor', compact('jadwal'));
    }

    public function admin()
    {
        $data = ModelJadwal::where('status', 'MENUNGGU')->get();
        return view('dashboard_admin.list_pendaftaran_siswa', compact('data'));
    }

    public function adminTutor()
    {
        $data = ModelJadwal::with('tutor', 'jadwal')->where('status', 'DIPILIH TUTOR')->get();
        return view('dashboard_admin.list_pendaftaran_tutor', compact('data'));
    }

    public function jadwalAktif()
    {
        $data = ModelJadwal::where('status', 'AKTIF')->get();
        return view('dashboard_admin.jadwalAktif', compact('data'));
    }

    public function jadwalTidakAktif()
    {
        $data = ModelJadwal::where('status', 'TIDAK AKTIF')->get();
        return view('dashboard_admin.jadwalTidakAktif', compact('data'));
    }

    public function jadwalTutor()
    {
        $data = ModelJadwal::where('tutor_id', '=', Auth::user()->id)->where('status', 'AKTIF')->get();
        return view('tutor.jadwal', compact('data'));
    }

    public function detailJadwalTutor($id)
    {
        $data = ModelSiswa::where('id', $id)->get();
        return view('tutor.detailJadwal', compact('data'));
    }

    public function jadwalTutorAdmin($id)
    {
        $data = ModelJadwal::where('tutor_id', $id)->get();
        return view('dashboard_admin.jadwalTutor', compact('data'));
    }

    public function jadwalSiswaTutor($id)
    {
        $data = ModelJadwal::where('id', $id)->get();
        return view('tutor.detailPendaftaran', compact('data'));
    }

    public function jadwalSiswaAdmin($id)
    {
        $data = ModelJadwal::where('murid_id', $id)->get();
        return view('dashboard_admin.jadwalSiswa', compact('data'));
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new ModelInvoice();
        $invoice->invoice = $request->invoice;
        $invoice->id_murid = $request->id_murid;
        $invoice->program = $request->program;
        $invoice->kelas = $request->kelas;
        $invoice->jumlah_sesi = $request->jumlah_sesi;
        $invoice->jumlah_mapel = $request->jumlah_mapel;
        $invoice->harga = $request->harga;
        $invoice->save();

        foreach ($request->mata_pelajaran as $key => $value){
        $data = new ModelJadwal();
        $data->invoice_id = $invoice->id;
        $data->murid_id = $request->murid_id[$key];
        $data->mata_pelajaran = $value;
        $data->hari1 = $request->hari1[$key];
        $data->hari2 = $request->hari2[$key];
        $data->waktu_hari1 = $request->waktu_hari1[$key];
        $data->waktu_hari2 = $request->waktu_hari2[$key];
        $data->status = $request->status[$key];
        $data->save();
        }
        return redirect('dataSiswa')->withMessage('Kamu Berhasil Daftar Les');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
        $data = ModelJadwal::where('id',$id)->first();
        $data->tutor_id = $request->tutor_id;
        $data->status = $request->status;
        $data->save();
        if(Auth::user()->role == 'tutor'){
        return redirect('tutor')->withMessage('Berhasil Konfirmasi');
        } else {
            if ($data->status == 'AKTIF'){
                return redirect('list_pendaftaranTutor')->withMessage('Berhasil Konfirmasi');
            } else {
                return redirect('jadwalTidakAktif')->withMessage('Berhasil Konfirmasi');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
