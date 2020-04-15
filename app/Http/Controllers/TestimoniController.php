<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelTestimoni;
class TestimoniController extends Controller
{

    public function testimoni()
    {
    	$testi = \DB::table('model_testimonis')->get();
    	 return view('dasboard_admin.testimoni', compact('testi'));
    }
    public function home()
    {
        $testi = \DB::table('model_testimonis')->get();
         return view('base.home_page', compact('testi'));
    }
    public function add(){
    	 $add = ModelTestimoni::all();
    	 return view('dasboard_admin.tambahTestimoni', compact('add'));
    }

    public function create(Request $request)
    {
    	$tambah = ModelTestimoni::create([
    		'nama_lengkap' =>$request->nama_lengkap,
    		'isi' =>$request->isi,
            'program' =>$request->program,
    	]);

    	return redirect()->route('testimoni')->with('sukses', 'Data berhasil di submit');
    }
    public function edit($id)
    {
        $data = ModelTestimoni::where('id','=',$id)->get();
        return view('dasboard_admin.editTestimoni', compact('data'));
    }

    public function update(Request $request,$id)
    {

        $data=ModelTestimoni::find($id);
        $data->update($request->all());

       return redirect()->route('testimoni')->with('sukses','Data Berhasil Diupdate');
    }
    public function delete($id)
    {
        $data = ModelTestimoni::where('id',$id)->first();
        $data->delete();
        return redirect()->route('testimoni')->with('destroy','Yakin ingin menghapus data?'); 
    }
}
