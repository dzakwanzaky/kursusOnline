<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelTestimoni;
use App\User;
class TestimoniController extends Controller
{

    public function testimoni()
    {
        $testi = ModelTestimoni::all();
    	 return view('dashboard_admin.testimoni', compact('testi'));
    }

    public function home()
    {
        $data = ModelTestimoni::with('siswa', 'user')->get();
        return view('base.home_page', compact('data'));
    }

    public function add(){
         $siswa = User::where('role', 'siswa')->get();
    	 return view('dashboard_admin.tambahTestimoni', compact('siswa'));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'isi' => 'required|min:20|string',
       ],
       [
            'isi.required' => 'Isi testimoni tidak boleh kosong',
            'isi.min' => 'Isi testimoni minimal 20 karakter',
       ]);
    	$tambah = ModelTestimoni::create([
    		'murid_id' =>$request->murid_id,
    		'isi' =>$request->isi,
    	]);

    	return redirect()->route('testimoni')->with('success', 'Berhasil Menambah Data!');
    }

    public function edit($id)
    {
        $data = ModelTestimoni::where('id','=',$id)->get();
        $siswa = User::where('role', 'siswa')->get();
        return view('dashboard_admin.editTestimoni', compact('data', 'siswa'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'isi' => 'required|min:20|string',
       ],
       [
            'isi.required' => 'Isi testimoni tidak boleh kosong',
            'isi.min' => 'Isi testimoni minimal 20 karakter',
       ]);
        $data=ModelTestimoni::find($id);
        $data->update($request->all());
        return redirect()->route('testimoni')->with('success','Berhasil Mengubah Data!');
    }

    public function delete($id)
    {
        $data = ModelTestimoni::where('id',$id)->first();
        $data->delete();
        return redirect()->route('testimoni')->with('success','Data Berhasil Dihapus!'); 
    }
}
