<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ModelJadwal;
use App\ModelSiswa;
use App\ModelInvoice;
use App\ModelProgram;
use Auth;
use PDF;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->first();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('id_murid', '=', Auth::user()->id)->get();
        return view('murid/invoicenya', compact('data', 'alamat', 'invoice'));
    }
    
    public function data()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->first();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('id_murid', '=', Auth::user()->id)->get();
        return view('murid/invoice', compact('data', 'alamat', 'invoice'));
    }

    public function detail()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('id_murid', '=', Auth::user()->id)->get();
        return view('base/invoiceDetail', compact('data', 'alamat', 'invoice'));
    }

    public function pdf()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('id_murid', '=', Auth::user()->id)->get();
        $pdf = PDF::loadView('murid/invoicenya', ['data'=>$data, 'alamat'=>$alamat, 'invoice'=>$invoice])->setPaper('A4');
        return $pdf->stream('invoice.pdf');
    }

    public function program(){
        $data = ModelProgram::all();
        return view('probel-dinamis', compact('data'));
    }

    public function paket(){
        $data1 = ModelProgram::where('id', '=', '1')->get();
        $data2 = ModelProgram::where('id', '=', '2')->get();
        $data3 = ModelProgram::where('id', '=', '3')->get();
        return view('base/paket_program_page', compact('data1', 'data2', 'data3'));
    }

    public function manajemenProgram(){
        $data = ModelProgram::all();
        return view('dashboard_admin/manajemenProgram', compact('data'));
    }
    

    public function edit($id)
    {
        $data = ModelProgram::where('id','=',$id)->get();
        return view('dashboard_admin.editProgram', compact('data'));
    }

    public function tambah(){
        return view('dashboard_admin.tambahProgram');
    }

    public function store(Request $request)
    {
        $data = new ModelProgram();
        $data->program = $request->program;
        $data->keterangan = $request->keterangan;
        $data->save();
        return redirect('manajemenProgram')->withMessage('Berhasil Merubah Data');
        
    }

    public function update(Request $request, $id)
    {
     
        $data = ModelProgram::where('id',$id)->first();
        $data->program = $request->program;
        $data->keterangan = $request->keterangan;
        $data->save();
        return redirect('manajemenProgram')->withMessage('Berhasil Merubah Data');
    }

    public function destroy($id)
    {
        $data = ModelProgram::where('id',$id)->first();
        $data->delete();
        return redirect()->route('manajemenProgram')->with('destroy','Yakin ingin menghapus data?'); 
    }

   
}
