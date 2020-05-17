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
        $data = ModelProgram::whereHas('paket')->get();
        return view('base/paket', compact('data'));
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
        $this->validate($request,[
            'nama_paket' => 'required|min:5|string',
            'jumlah_mapel' => 'required|numeric',
            'jumlah_pertemuan' => 'required|numeric',
       ],
       [
            'nama_paket.required' => 'Nama paket tidak boleh kosong',
            'nama_paket.min' => 'Nama paket minimal 5 karakter',
            'jumlah_mapel.required' => 'Jumlah mata pelajaran tidak boleh kosong',
            'jumlah_mapel.numeric' => 'Jumlah mata pelajaran harus berupa angka',
            'jumlah_pertemuan.required' => 'Jumlah pertemuan tidak boleh kosong',
            'jumlah_pertemuan.numeric' => 'Jumlah pertemuan harus berupa angka',
         
       ]);
        $data = new ModelPaket();
        $data->nama_paket = $request->nama_paket;
        $data->program_id = $request->program_id;
        $data->kategori = $request->kategori;
        $data->jumlah_mapel = $request->jumlah_mapel;
        $data->jumlah_pertemuan = $request->jumlah_pertemuan;
        $data->harga = $request->harga;
        $data->save();
        return redirect('manajemenPaket')->with('success', 'Berhasil Merubah Data');
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
        $program = ModelProgram::all();
        return view('dashboard_admin.editPaket', compact('data', 'program'));
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
        $this->validate($request,[
            'nama_paket' => 'required|min:5|string',
            'jumlah_mapel' => 'required|numeric',
            'jumlah_pertemuan' => 'required|numeric',
       ],
       [
            'nama_paket.required' => 'Nama paket tidak boleh kosong',
            'nama_paket.min' => 'Nama paket minimal 5 karakter',
            'jumlah_mapel.required' => 'Jumlah mata pelajaran tidak boleh kosong',
            'jumlah_mapel.numeric' => 'Jumlah mata pelajaran harus berupa angka',
            'jumlah_pertemuan.required' => 'Jumlah pertemuan tidak boleh kosong',
            'jumlah_pertemuan.numeric' => 'Jumlah pertemuan harus berupa angka',
         
       ]);
        $data = ModelPaket::where('id',$id)->first();
        $data->nama_paket = $request->nama_paket;
        $data->program_id = $request->program_id;
        $data->kategori = $request->kategori;
        $data->jumlah_mapel = $request->jumlah_mapel;
        $data->jumlah_pertemuan = $request->jumlah_pertemuan;
        $data->harga = $request->harga;
        $data->save();
        return redirect('manajemenPaket')->withMessage('success', 'Berhasil Merubah Data');
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
