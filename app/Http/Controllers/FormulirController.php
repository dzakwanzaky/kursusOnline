<?php

namespace App\Http\Controllers;
use App\ModelFormulir;


use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function store(Request $request, $id)
    {
        $data = new ModelFormulir();
        $data->namalengkap = $request->namalengkap;
        $data->notelp = $request->notelp;
        $data->asalsekolah = $request->asalsekolah;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('soalTO', $id);
    }
}
