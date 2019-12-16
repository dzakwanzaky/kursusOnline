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
Route::get('/tes','Controller@tes');


Route::get('/', function () {
    return view('base/home_page');
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
Route::get('/dataSiswa', function () {
    return view('base/dataSiswa');
});
Route::get('/infoPaket', function () {
    return view('base/info_paket');
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
Route::get('pendaftaranSiswaGold', function () {
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

//Kalau menggunakan Controller
// Route::get('/murid', 'SiswaController@index');
Route::get('/landing', 'BaseController@index');

//Halaman dashboard Murid
Route::get('/murid', function () {
    return view('murid/murid');
});
Route::get('/invoice', function () {
    return view('murid/invoice');
});
Route::get('/invoicenya', function () {
    return view('murid/invoicenya');
});
Route::get('/profileMurid', function () {
    return view('murid/profile');
});
Route::get('/editProfile', function () {
    return view('murid/editProfile');
});
Route::get('/editMurid', function () {
    return view('murid/editMuridLogin');
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
Route::get('/profile', function () {
    return view('tutor/profiletutor');
});
Route::get('/edit', function () {
    return view('tutor/editprofile');
});
Route::get('/editTutor', function () {
    return view('tutor/editTutorLogin');
});

//DASHBOARD ADMIN
Route::get('/manajemenTutor', function () {
    return view('dashboard_admin/manajemenTutor');
});
Route::get('/profileSiswa', function () {
    return view('dashboard_admin/profileSiswa');
});
Route::get('/profileTutor', function () {
    return view('dashboard_admin/profileTutor');
});
Route::get('/profileAdmin', function () {
    return view('dashboard_admin/profileAdmin');
});
Route::get('/list_pendaftaranSiswa', function () {
    return view('dashboard_admin/list_pendaftaran_siswa');
});
Route::get('/list_pendaftaranTutor', function () {
    return view('dashboard_admin/list_pendaftaran_tutor');
});
Route::get('/editAdmin', function () {
    return view('dashboard_admin/edit');
});

Auth::routes();

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('list_pendaftaranSiswa','JadwalController@admin');
    Route::get('list_pendaftaranTutor','JadwalController@adminTutor');
    Route::get('daftarSiswa','SiswaController@daftarSiswa');
});
Route::middleware(['tutor'])->group(function () {
    Route::get('/tutor','JadwalController@tutor');
    Route::get('jadwal','JadwalController@jadwalTutor');
    Route::get('profile','TutorController@profileTutor');

});

Route::middleware(['siswa'])->group(function () {
    Route::get('/murid','JadwalController@index');
    Route::get('/invoicenya','ProgramController@index');
    Route::get('/invoice','ProgramController@data');
    Route::get('/invoicenya_pdf', 'ProgramController@pdf'); 
    Route::get('profileMurid','SiswaController@profileSiswa');

});

Route::post('/upload', 'InvoiceController@proses_upload')->name('upload');


Route::get('/verify','VerifyController@getVerify')->name('getverify');
Route::post('/verify','VerifyController@postVerify')->name('verify');

Route::resource('pendaftaranSiswa','JadwalController');

Route::get('/tutor/{id}','JadwalController@update')->name('tutor');

Route::resource('dataTutor','TutorController');
Route::resource('dataSiswa','SiswaController');

Route::resource('paketProgram','InvoiceController');

//Route::resource('invoice','ProgramController');

 Route::resource('register', 'Auth\RegisterController');
Route::get('/editMurid/{id}', 'Auth\RegisterController@editMurid')->name('editMurid');
// Route::get('/register/{id}', 'Auth\RegisterController@update')->name('register.update');
Route::get('/editProfile/{id}', 'Auth\RegisterController@editProfile')->name('editProfile');
// Route::get('/updateMurid/{id}', 'Auth\RegisterController@updateMurid')->name('updateMurid');



