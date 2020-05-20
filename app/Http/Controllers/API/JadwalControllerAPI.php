<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\ModelJadwal;
use Auth;
use App\ModelSiswa;
use App\ModelTutor;
use App\ModelInvoice;


class JadwalControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $data = ModelJadwal::with('siswa')->where('murid_id', '=', Auth::user()->id)->get();
        return response()->json(array(
            'status'    => 'sukses',
            'result'    => $data
        ));     
    }

    public function tutor()
    {
        $tutor = ModelTutor::where('id', '=', Auth::user()->id)->first();
        $array = json_decode ($tutor->mapel_id);
        $program = json_decode ($tutor->program_id);
        $data = ModelJadwal::with('invoice')
        ->whereHas('invoice', function($q) use ($tutor)
        {$q-> whereIn('program_id', [json_decode ($tutor->program_id)]);}
        )
        ->whereIn('mapel_id', $array)
        ->where('status', 'MENUNGGU')->get();
        return response()->json(array(
            'status'    => 'sukses',
            'result'    => $data
        )); 
    }

  
    public function jadwalTutor()
    {
        $data = ModelJadwal::where('tutor_id', '=', Auth::user()->id)->where('status', 'AKTIF')->get();
        return response()->json(array(
            'status'    => 'sukses',
            'result'    => $data
        ));     
    }

    public function detailSiswa($id)
    {
        $data = ModelSiswa::with('user')->where('id', $id)->get();
        return response()->json(array(
            'status'    => 'sukses',
            'result'    => $data
        ));     
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
        $invoice->program_id = $request->program_id;
        $invoice->kategori = $request->kategori;
        $invoice->kelas_id = $request->kelas_id;
        $invoice->paket_id = $request->paket_id;
        $invoice->harga = $request->harga;
        
        if($invoice->save()){
        foreach ($request->mapel_id as $key => $value){
        $data = new ModelJadwal();
        $data->invoice_id = $invoice->id;
        $data->murid_id = $request->murid_id[$key];
        $data->mapel_id = $request->mapel_id[$key];
        $data->hari1 = $request->hari1[$key];
        $data->hari2 = $request->hari2[$key];
        $data->waktu_hari1 = $request->waktu_hari1[$key];
        $data->waktu_hari2 = $request->waktu_hari2[$key];
        $data->status = $request->status[$key];
        $data->save();
        } if($data->save()){
            $res['status'] = "sukses";
            $res['result'] = "$data";
            return response($res);
                }  
    }  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

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
        if($data->save()){
            $res['message'] = "sukses";
            $res['value'] = "$data";
            return response($res);
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
