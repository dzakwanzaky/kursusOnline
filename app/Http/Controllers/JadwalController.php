<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelJadwal;
use Auth;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        return view('murid.murid', compact('data'));
    }

    public function tutor()
    {
        $data = ModelJadwal::all();
        return view('tutor.tutor', compact('data'));
    }

    public function admin()
    {
        $data = ModelJadwal::where('status', null);
        return view('dashboard_admin.list_pendaftaran_siswa', compact('data'));
    }

    public function adminTutor()
    {
        $data = ModelJadwal::where('status', 'Diajukan Tutor')->get();
        return view('dashboard_admin.list_pendaftaran_tutor', compact('data'));
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
        $data = new ModelJadwal();
        $data->murid_id = $request->murid_id;
        $data->invoice = $request->invoice;
        $data->nama_murid = $request->nama_murid;
        $data->program = $request->program;
        $data->status = $request->status;
        $data->kelas = $request->kelas;
        $data->mata_pelajaran = $request->mata_pelajaran;
        $data->hari1 = $request->hari1;
        $data->hari2 = $request->hari2;
        $data->hari3 = $request->hari3;
        $data->waktu = $request->waktu;
        $data->save();
        return redirect('murid')->withMessage('Kamu Berhasil Daftar Les');
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
        // $data->user_id = $request->user_id;
        $data->tutor_id = $request->tutor_id;
        $data->nama_tutor = $request->nama_tutor;
        // $data->program = $request->program;
        // $data->kelas = $request->kelas;
        // $data->mata_pelajaran = $request->mata_pelajaran;
        // $data->hari1 = $request->hari1;
        // $data->hari2 = $request->hari2;
        // $data->hari3 = $request->hari3;
        // $data->waktu = $request->waktu;
        $data->status = $request->status;
        $data->save();
        return redirect('tutor')->withMessage('Berhasil Konfirmasi');
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
