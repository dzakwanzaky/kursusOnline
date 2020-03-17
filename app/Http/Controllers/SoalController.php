<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\ModelSoal;
use App\Imports\SoalImport;
use Maatwebsite\Excel\Facades\Excel;


class SoalController extends Controller
{
    public function index($id){
        return view('dashboard_admin.tambahSoal', compact('id'));
    }

    public function soal()
    {
    	        // mengambil data dari table 
		$data = DB::table('soalbindosbm')->SimplePaginate(1);
 		$many_data = DB::table('soalbindosbm')->count('*');
                // mengirim data pegawai ke view index
                dd($many_data);
		return view('base/soalbindosbm',['soalbindosbm' => $soalbindosbm,'max_number'=>$many_data]);
 
	}
    
    public function show($id)
    {
           
    }

    public function store(Request $request)
    {
        foreach ($request->nomor_soal as $key => $value){
            $data = new ModelSoal();
            $data->id_to = $request->id_to;
            $data->nomor_soal = $value;

            $file = $request->file[$key];
            $nama_file = time()."_".$file->getClientOriginalName();  
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $data->file = $nama_file;

            $data->soal = $request->soal[$key];
            $data->option_a = $request->option_a[$key];
            $data->option_b = $request->option_b[$key];
            $data->option_c = $request->option_c[$key];
            $data->option_d = $request->option_d[$key];
            $data->option_e = $request->option_e[$key];
            $data->jawaban = $request->jawaban[$key];
            $data->save();
        }  
        return redirect()->route('daftarSoal', $data->id_to);
    }

    public function edit($id)
    {
        $data = ModelSoal::where('id','=',$id)->get();
        return view('dashboard_admin.editSoal', compact('data'));
    }

    public function importExcel(Request $request)
    {
        $file = $request->file;
        $nama_file = time()."_".$file->getClientOriginalName();  
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);
        Excel::import(new SoalImport($request->id_to), public_path('/data_file/'.$nama_file));
        return redirect()->route('daftarTryout');

    }

    public function update(Request $request, $id)
    {
        $data = ModelSoal::where('id',$id)->first();
        $data->id_to = $request->id_to;
        $data->nomor_soal = $request->nomor_soal;
        if($request->file){
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();  
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $data->file = $nama_file;  
        }
        $data->soal = $request->soal;
        $data->option_a = $request->option_a;
        $data->option_b = $request->option_b;
        $data->option_c = $request->option_c;
        $data->option_d = $request->option_d;
        $data->option_e = $request->option_e;
        $data->jawaban = $request->jawaban;
        $data->save();
        return redirect()->route('daftarSoal', $data->id_to);
    }

    public function destroy($id)
    {
        $data = ModelSoal::where('id',$id)->first();
        $data->delete();
        return redirect()->route('daftarSoal', $data->id_to)->with('destroy','Yakin ingin menghapus data?'); 
    }



}
