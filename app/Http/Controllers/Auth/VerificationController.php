<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\ModelSiswa;
use App\ModelTutor;
use Illuminate\Auth\Events\Verified; 



class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/landing';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $user=User::where('code',$request->code)->first()
        // Auth::login($user, true);
        // $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function verify(Request $request)
{
    $user = User::findOrfail($request->route('id'));
    Auth::login($user, true);

    if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
        throw new AuthorizationException;
    }

    if ($user->markEmailAsVerified())
        event(new Verified($user));
        $user->active=1;
        $user->save();
        $siswa = ModelSiswa::where('id', '=', Auth::user()->id)->first();
        $tutor = Modeltutor::where('id', '=', Auth::user()->id)->first();
        if($user->role=='siswa')
        {
            if ($siswa != NULL){
                return redirect('/siswa')->withMessage('Your account is active');
            } else {
                return redirect('/dataSiswa')->withMessage('Your account is active');

            } 
        } else {
            if ($tutor != NULL){
                return redirect('/tutor')->withMessage('Your account is active');
            } else {
                return redirect('/dataTutor');
            }   
        }
    }
}
