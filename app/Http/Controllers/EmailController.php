<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
{
    try{
        Mail::send('email', ['nama' => $request->nama, 'pesan' => $request->pesan], function ($message) use ($request)
        {
            $message->subject($request->judul);
            $message->from('donotreply@kiddy.com', 'Kiddy');
            $message->to($request->email);
        });
        return back()->with('alert-success','Berhasil Kirim Email');
    }
    catch (Exception $e){
        return response (['status' => false,'errors' => $e->getMessage()]);
    }
}
}
