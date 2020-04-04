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
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $datas = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        return response()->json(array(
            'data' => $data,
            'datas' => $datas, 
        ));    
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
        return response()->json($jadwal);
    }

  
    public function jadwalTutor()
    {
        $data = ModelJadwal::with('datas', 'jadwal')->where('tutor_id', '=', Auth::user()->id)->where('status', 'AKTIF')->orWhere('status', 'DIPILIH TUTOR')->get();
        return response()->json($data);
    }

    public function detailJadwalTutor($id)
    {
        $data = ModelJadwal::with('datas', 'jadwal')->where('id', $id)->get();
        return response()->json($data);
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
        if($invoice->save()){
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
                if($data->save()){
                    $res['message'] = "Success!";
                    $res['value'] = "$data";
                    return response($res);
                    }  
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
            $res['message'] = "Success!";
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
