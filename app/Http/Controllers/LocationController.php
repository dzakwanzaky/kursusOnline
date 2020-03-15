<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex() 
    {
        # Ambil semua isi tabel tujuan dari model
        $provinsi = Provinsi::all();
        # Inisialisasi variabel daftar dengan array
        $daftar = array('' => '');
        # lakukan perulangan untuk provinsi
        foreach($provinsi as $temp)
            # Isi daftar dengan nama (provinsi) berdasarkan id
            $daftar[$temp->id] = $temp->nama;
        # Tampilkan halaman index beserta variabel daftar
        return View::make('index', compact('daftar'));
    }

    public function postDropdown() 
    {	
        # Tarik ID inputan
        $set = Input::get('id');

        # Inisialisasi variabel berdasarkan masing-masing tabel dari model
        # dimana ID target sama dengan ID inputan
        $kabupaten = ModelKab::where('id_provinsi', $set)->get();
        $kecamatan = ModelKecamatan::where('kab_id', $set)->get();

        # Buat pilihan "Switch Case" berdasarkan variabel "type" dari form
        switch(Input::get('type')):
            # untuk kasus "kabupaten"
            case 'kabupaten':
                # buat nilai default
                $return = '<option value="">Pilih Kabupaten...</option>';
                # lakukan perulangan untuk tabel kabupaten lalu kirim
                foreach($kabupaten as $temp) 
                    # isi nilai return
                    $return .= "<option value='$temp->id'>$temp->kabupaten</option>";
                # kirim
                return $return;
            break;
            # untuk kasus "kecamatan"
            case 'kecamatan':
                $return = '<option value="">Pilih Kecamatan...</option>';
                foreach($kecamatan as $temp) 
                    $return .= "<option value='$temp->id'>$temp->kecamatan</option>";
                return $return;
            break;
            
        # pilihan berakhir
        endswitch;    
    }

}
