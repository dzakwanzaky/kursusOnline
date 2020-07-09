<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelTryout;
use App\ModelSoal;
use App\ModelMapel;
use App\ModelProgram;
use Illuminate\Support\Facades\Validator;

class TryoutController extends Controller
{

    public function index(){
        $data = ModelTryout::all();
        return view('dashboard_admin.daftarTryout', compact('data'));
    }

    public function tambah(){
        $sd = ModelMapel::where('id_program', '1')->get();
        $smp = ModelMapel::where('id_program', '2')->get();
        $sma = ModelMapel::where('id_program', '3')->get();
        $sbm = ModelMapel::where('id_program', '4')->get();
        $program = ModelProgram::all();
        return view('dashboard_admin.tambahTryout', compact('sd', 'smp', 'sma', 'sbm', 'program'));
    }

    public function lihatSoal($id){
        $data = ModelSoal::where('id_to', $id)->get();
        $datas = ModelTryout::where('id', $id)->get();
        return view('dashboard_admin.daftarSoal', compact('data', 'datas'));   
    }

    public function tryoutSD(){
        $bind = ModelTryout::where('program_id', '1')->where('mapel_id', '3')->get();
        $ipa = ModelTryout::where('program_id', '1')->where('mapel_id', '2')->get();
        $mat = ModelTryout::where('program_id', '1')->where('mapel_id', '1')->get();
        return view('base.sd', compact('bind', 'ipa', 'mat'));   
    }

    public function tryoutSMP(){
        $mat = ModelTryout::where('program_id', '2')->where('mapel_id', '4')->get();
        $ipa = ModelTryout::where('program_id', '2')->where('mapel_id', '5')->get();
        $ips = ModelTryout::where('program_id', '2')->where('mapel_id', '6')->get();
        $bind = ModelTryout::where('program_id', '2')->where('mapel_id', '7')->get();
        $bing = ModelTryout::where('program_id', '2')->where('mapel_id', '8')->get();
        return view('base.smp', compact('bind', 'ipa', 'mat', 'bing', 'ips'));   
    }

    public function tryoutSMA(){
        $mat = ModelTryout::where('program_id', '3')->where('mapel_id', '9')->get();
        $fis = ModelTryout::where('program_id', '3')->where('mapel_id', '10')->get();
        $kim = ModelTryout::where('program_id', '3')->where('mapel_id', '11')->get();
        $bio = ModelTryout::where('program_id', '3')->where('mapel_id', '12')->get();
        $eko = ModelTryout::where('program_id', '3')->where('mapel_id', '13')->get();
        $sosio = ModelTryout::where('program_id', '3')->where('mapel_id', '14')->get();
        $geo = ModelTryout::where('program_id', '3')->where('mapel_id', '15')->get();
        $sej = ModelTryout::where('program_id', '3')->where('mapel_id', '16')->get();
        $bing = ModelTryout::where('program_id', '3')->where('mapel_id', '17')->get();
        $bind = ModelTryout::where('program_id', '3')->where('mapel_id', '18')->get();
        return view('base.sma', compact('bind','mat', 'fis', 'kim', 'bio', 'eko', 'sosio', 'geo', 'sej', 'bing'));   
    }

    public function tryoutSBMPTN(){
        $soshum = ModelTryout::where('program_id', '4')->where('mapel_id', '19')->get();
        $saintek = ModelTryout::where('program_id', '4')->where('mapel_id', '20')->get();
        $tka = ModelTryout::where('program_id', '4')->where('mapel_id', '21')->get();
        return view('base.sbmptn', compact('soshum', 'saintek', 'tka'));   
    }

    public function soal($id){
        $data = ModelSoal::where('id_to', $id)->SimplePaginate(1);
        $many_data = ModelSoal::where('id_to', $id)->count();
		return view('base/soal',['data' => $data,'max_number'=>$many_data]);
    }

    public function akses($tryout_id){
        
        return view('base.aksessoal', compact('tryout_id'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|min:5',
            'jumlah_soal' => 'required|numeric',
       ],
       [
            'nama.min' => 'Nama tryout harus tidak kurang dari 5 karakter',
            'jumlah_soal.numeric' => 'Jumlah soal harus berupa angka',
       ]);
        $data = new ModelTryout();
        $data->mapel_id = $request->mapel_id;
        $data->program_id = $request->program_id;
        $data->nama = $request->nama;
        $data->jumlah_soal = $request->jumlah_soal;
        $data->save();
        return redirect()->route('tambahSoal', $data->id)->with('success', 'Berhasil Menambah Data!');;
    }

    public function edit($id)
    {
        $data = ModelTryout::where('id','=',$id)->get();
        $sd = ModelMapel::where('id_program', '1')->get();
        $smp = ModelMapel::where('id_program', '2')->get();
        $sma = ModelMapel::where('id_program', '3')->get();
        $sbm = ModelMapel::where('id_program', '4')->get();
        $program = ModelProgram::all();
        return view('dashboard_admin.editTryout', compact('data', 'sd', 'smp', 'sma', 'sbm', 'program'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|min:5',
            'jumlah_soal' => 'required|numeric',
       ],
       [
            'nama.min' => 'Nama tryout harus tidak kurang dari 5 karakter',
            'jumlah_soal.numeric' => 'Jumlah soal harus berupa angka',
       ]);
        $data = ModelTryout::where('id',$id)->first();
        $data->mapel_id = $request->mapel_id;
        $data->program_id = $request->program_id;
        $data->nama = $request->nama;
        $data->jumlah_soal = $request->jumlah_soal;
        $data->save();
        return redirect('daftarTryout')->with('success', 'Berhasil Mengubah Data!');    
    }

    public function destroy($id)
    {
        $data = ModelTryout::where('id',$id)->first();
        $data->delete();
        return redirect()->route('daftarTryout')->with('success','Data Berhasil Dihapus!'); 
    }


}
