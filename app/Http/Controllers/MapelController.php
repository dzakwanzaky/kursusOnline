<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMapel;

class MapelController extends Controller
{
    public function index($id){
        return view('dashboard_admin.tambahMapel', compact('id'));
    }

    public function store(Request $request)
    {
        $data = new ModelMapel();
        $data->id_program = $request->id_program;
        $data->mapel = $request->mapel;
        $data->save();
        return redirect()->route('daftarMapel', $data->id_program)->with('destroy','Yakin ingin menghapus data?'); 

    }

    public function edit($id)
    {
        $data = ModelMapel::where('id','=',$id)->get();
        return view('dashboard_admin.editMapel', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ModelMapel::where('id', $id)->first();
        $data->mapel = $request->mapel;
        $data->save();
        return redirect()->route('daftarMapel', $data->id_program)->with('destroy','Yakin ingin menghapus data?'); 

    }

    public function destroy($id)
    {
        $data = ModelMapel::where('id',$id)->first();
        $data->delete();
        return redirect()->route('daftarMapel', $data->id_program)->with('destroy','Yakin ingin menghapus data?'); 
    }
}
