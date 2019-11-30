<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Nexmo\Laravel\Facade\Nexmo;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kontak', function () {
    return view('base/kontak_page');
});
Route::get('/paketProgram', function () {
    return view('base/paket_program_page');
});
Route::get('/login', function () {
    return view('base/login_page');
});

//halaman proses register akun
Route::get('/registerSiswa', function () {
    return view('base/registerSiswa_page');
});
Route::get('/registerTutor', function () {
    return view('base/registerTutor_page');
});
Route::get('/registerPilih', function () {
    return view('base/pilihan_page');
});

//pendaftaran Siswa berdasarkan paket yang dipilih
Route::get('/pendaftaranSiswaGold', function () {
    return view('base/pendaftaranSiswaGold_page');
});
Route::get('/pendaftaranSiswaPrem', function () {
    return view('base/pendaftaranSiswaPrem_page');
});
Route::get('/pendaftaranSiswaReg', function () {
    return view('base/pendaftaranSiswaReg_page');
});

Route::get('/pendaftaranTutor', function () {
    return view('base/pendaftaranTutor_page');
});

$router->get('/nexmo', function () use ($router) {
    app(Nexmo\Client::class);
});

//Kalau menggunakan Contoller
Route::get('/admin', 'AdminController@index');
Route::get('/murid', 'SiswaController@index');
Route::get('/landing', 'BaseController@index');

//halaman dashboard Murid
Route::get('/murid', function () {
    return view('murid/murid');
});
Route::get('/invoice', function () {
    return view('murid/invoice');
});
Route::get('/invoicenya', function () {
    return view('murid/invoicenya');
});

//halaman dashboard Tutor
Route::get('/tutor', function () {
    return view('tutor/tutor');
});
Route::get('/jadwal', function () {
    return view('tutor/jadwal');
});
Route::get('/pendapatan', function () {
    return view('tutor/pendapatan');
});

//Authentication
Auth::routes();
//for role route
Route::middleware(['admin'])->group(function () {
    //Route::resource('admin', 'AdminController');
});
Route::middleware(['tutor'])->group(function () {
    //Route::resource('tutor', 'TutorController');
});

Route::get('/verify','VerifyController@getVerify')->name('getverify');
Route::post('/verify','VerifyController@postVerify')->name('verify');

//pendaftaran
Route::resource('pendaftaranSiswa','JadwalController');
