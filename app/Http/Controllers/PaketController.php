<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPaket;
use App\ModelProgram;
class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = ModelPaket::where('program', 'SD')->get();
        $dats = ModelPaket::where('program', 'SMP')->get();
        $das = ModelPaket::where('program', 'SMA')->get();
        $sbm = ModelPaket::where('program', 'SBMPTN')->get();
        $stan = ModelPaket::where('program', 'STAN')->get();
        $utul = ModelPaket::where('program', 'UTUL UGM')->get();
        $cpns = ModelPaket::where('program', 'CPNS')->get();
        $komp = ModelPaket::where('program', 'KOMPUTER')->get();
        return view('base/paket', compact(['datas','dats','das','sbm','stan','utul','cpns','komp']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function manajemenPaket(){
        $data = ModelPaket::all();
        return view('dashboard_admin/manajemenPaket', compact('data'));
    }

    public function tambah(){
        $data = ModelProgram::all();
        return view('dashboard_admin/tambahPaket', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelPaket();
        $data->nama_paket = $request->nama_paket;
        $data->program = $request->program;
        $data->jumlah_mapel = $request->jumlah_mapel;
        $data->jumlah_pertemuan = $request->jumlah_pertemuan;
        $data->harga = $request->harga;
        $data->save();
        return redirect('manajemenPaket')->withMessage('Berhasil Merubah Data');
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
        $data = ModelPaket::where('id','=',$id)->get();
        return view('dashboard_admin.editPaket', compact('data'));
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
        $data = ModelPaket::where('id',$id)->first();
        $data->nama_paket = $request->nama_paket;
        $data->program = $request->program;
        $data->jumlah_mapel = $request->jumlah_mapel;
        $data->jumlah_pertemuan = $request->jumlah_pertemuan;
        $data->harga = $request->harga;
        $data->save();
        return redirect('manajemenPaket')->withMessage('Berhasil Merubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelPaket::where('id',$id)->first();
        $data->delete();
        return redirect()->route('manajemenPaket')->with('destroy','Yakin ingin menghapus data?'); 
    }
}
