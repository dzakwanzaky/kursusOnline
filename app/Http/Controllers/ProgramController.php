<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ModelJadwal;
use App\ModelSiswa;
use App\ModelInvoice;
use App\ModelProgram;
use App\ModelTryout;
use App\ModelMapel;
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

    //untuk invoice
    public function index()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->first();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('id_murid', '=', Auth::user()->id)->get();
        return view('murid/invoicenya', compact('data', 'alamat', 'invoice'));
    }
    
    //untuk invoice
    public function data()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->first();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('id_murid', '=', Auth::user()->id)->get();
        return view('murid/invoice', compact('data', 'alamat', 'invoice'));
    }

    //untuk invoice
    public function detail()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        $alamat = ModelSiswa::where('id', '=', Auth::user()->id)->get();
        $invoice = ModelInvoice::where('id_murid', '=', Auth::user()->id)->get();
        return view('base/invoiceDetail', compact('data', 'alamat', 'invoice'));
    }

    //untuk invoice
    public function pdf($id)
    {
        $data = ModelInvoice::where('id_murid', $id)->get();
        $pdf = PDF::loadView('murid/invoicenya', ['data'=>$data])->setPaper('A4');
        return $pdf->stream('invoice.pdf');
    }


    public function program(){
        $data = ModelProgram::all();
        return view('probel-dinamis', compact('data'));
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

    public function update(Request $request, $id)
    {
     
        $data = ModelProgram::where('id',$id)->first();
        $data->program = $request->program;
        $data->keterangan = $request->keterangan;
        $data->keterangan_rinci = $request->keterangan_rinci;

        if($request->file){
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();  
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $data->file = $nama_file;  
        }
        $data->save();
        return redirect('manajemenProgram')->with('success', 'Berhasil Merubah Data');
    }

    public function tambah(){
        return view('dashboard_admin.tambahProgram');
    }

    public function store(Request $request)
    {
        $data = new ModelProgram();
        $data->program = $request->program;
        $data->keterangan = $request->keterangan;
        $data->keterangan_rinci = $request->keterangan_rinci;
        if($request->file){
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();  
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $data->file = $nama_file;  
        }
        $data->save();
        foreach ($request->mapel as $key => $value){
        $paket = new ModelMapel();
        $paket->id_program = $data->id;
        $paket->mapel = $request->mapel[$key];
        $paket->save();
        }
        return redirect('manajemenProgram')->withMessage('Berhasil Merubah Data');
    }



    public function destroy($id)
    {
        $data = ModelProgram::where('id',$id)->first();
        $data->delete();
        return redirect()->route('manajemenProgram')->with('destroy','Yakin ingin menghapus data?'); 
    }

    public function lihatMapel($id){
        $data = ModelMapel::where('id_program', $id)->get();
        $datas = ModelProgram::where('id', $id)->get();
        return view('dashboard_admin.daftarMapel', compact('data', 'datas'));   
    }

   public function rinci($id)
   {
    $rinci = \App\ModelProgram::find($id);
    $data = \DB::table('model_mapels')->where('id_program', $id)->get();
     $dat = \DB::table('model_tryouts')->where('program_id',$id)->get();
    return view('base.sd', compact('rinci','data','dat'));
   }
   
   public function tryout($id_program, $id)
   {
    $rinci =ModelProgram::find($id_program);
    $datay = \DB::table('model_mapels')->where('id_program', $id_program)->get();
    $data = ModelTryout::where('program_id', $id_program)->where('mapel_id', $id)->get();
    return view('base.soalFilter', compact('data','rinci','datay'));
   }
}
