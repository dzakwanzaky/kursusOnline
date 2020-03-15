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


Route::get('/wizardsbm', function () {
    return view('base/aksessoal');
});

Route::get('/endhalaman', function () {
    return view('base/endhalaman');
});


Route::get('/soalbindosbm','SoalbindosbmController@index');
Route::get('/soalbingsbm','SoalbingsbmController@index');
Route::get('/soaltpasbm','SoaltpasbmController@index');
Route::get('/soalmtksainsbm','SoalmtksainsbmController@index');
Route::get('/soalkimiasbm','SoalkimiasbmController@index');
Route::get('/soalfisikasbm','SoalfisikasbmController@index');
Route::get('/soalbiologisbm','SoalbiologisbmController@index');
Route::get('/soalmtksoshumsbm','SoalmtksoshumsbmController@index');
Route::get('/soalekonomisbm','SoalekonomisbmController@index');
Route::get('/soalsosiologisbm','SoalsosiologisbmController@index');

Route::get('/soalbindosd','SoalbindosdController@index');
Route::get('/soalmtksd','SoalmtksdController@index');
Route::get('/soalipasd','SoalipasdController@index');

Route::get('/soalbindosmp','SoalbindosmpController@index');
Route::get('/soalmtksmp','SoalmtksmpController@index');
Route::get('/soalipasmp','SoalipasmpController@index');
Route::get('/soalbingsmp','SoalbingsmpController@index');

Route::get('/soalbindosma','SoalbindosmaController@index');
Route::get('/soalmtkipasma','SoalmtkipasmaController@index');
Route::get('/soalmtkipssma','SoalmtkipssmaController@index');
Route::get('/soalbiologisma','SoalbiologismaController@index');
Route::get('/soalkimiasma','SoalkimiasmaController@index');
Route::get('/soalfisikasma','SoalfisikasmaController@index');
Route::get('/soalbingsma','SoalbingsmaController@index');
Route::get('/soalsosiologisma','SoalsosiologismaController@index');
Route::get('/soalgeografisma','SoalgeografismaController@index');
Route::get('/soalekonomisma','SoalekonomismaController@index');
Route::get('/card', function () {
    return view('base/card');
});

Route::get('/sbmptn', function () {
    return view('base/partsbmptn');
});

Route::get('/sd', function () {
    return view('base/sd');
});

Route::get('/smp', function () {
    return view('base/smp');
});
Route::get('/sma', function () {
    return view('base/sma');
});

Route::get('/probel', function () {
    return view('probel');
});

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
Route::get('pendaftaranProgram3', function () {
    return view('base/pendaftaranProgram3');
});

Route::get('/pendaftaranProgram1', function () {
    return view('base/pendaftaranProgram1');
});
Route::get('/pendaftaranProgram2', function () {
    return view('base/pendaftaranProgram2');
});
Route::get('/pendaftaranProgram3', function () {
    return view('base/pendaftaranProgram3');
});
Route::get('/pendaftaranProgram4', function () {
    return view('base/pendaftaranProgram4');
});
Route::get('/pendaftaranProgram5', function () {
    return view('base/pendaftaranProgram5');
});
Route::get('/pendaftaranProgram6', function () {
    return view('base/pendaftaranProgram6');
});
Route::get('/pendaftaranProgram7', function () {
    return view('base/pendaftaranProgram7');
});
Route::get('/pendaftaranProgram8', function () {
    return view('base/pendaftaranProgram8');
});
Route::get('/pendaftaranProgram9', function () {
    return view('base/pendaftaranProgram9');
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
Route::get('/invoiceDetail', function () {
    return view('base/invoiceDetail');
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
Route::get('/detail', function () {
    return view('tutor/detailProfile');
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
Route::get('/manajemenProgram', function () {
    return view('dashboard_admin/manajemenProgram');
});
Route::get('/editProgram', function () {
    return view('dashboard_admin/editProgram');
});
Route::get('/changePassword', function () {
    return view('dashboard_admin/changePassword');
});
Route::get('/changePasswordTutor', function () {
    return view('tutor/changePassword');
});
Route::get('/changePasswordMurid', function () {
    return view('murid/changePassword');
});
Route::get('/video', function () {
    return view('murid/video');
});
Route::get('/daftarTryout', function () {
    return view('dashboard_admin/daftarTryout');
});
Route::get('/tambahTryout', function () {
    return view('dashboard_admin/tambahTryout');
});
Route::get('/tambahProgram', function () {
    return view('dashboard_admin/tambahProgram');
});

Auth::routes();

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('list_pendaftaranSiswa','JadwalController@admin');
    Route::get('list_pendaftaranTutor','JadwalController@adminTutor');
    Route::get('jadwalAktif','JadwalController@jadwalAktif')->name('jadwalAktif');
    Route::get('jadwalTidakAktif','JadwalController@jadwalTidakAktif');
    Route::get('jadwalTutor/{id}','JadwalController@jadwalTutorAdmin')->name('jadwalTutor');
    Route::get('jadwalSiswa/{id}','JadwalController@jadwalSiswaAdmin')->name('jadwalSiswa');
    Route::get('daftarSiswa','SiswaController@daftarSiswa');
    Route::get('daftarSiswaBelumAktif','SiswaController@daftarSiswaBelumAktif');
    Route::get('daftarSiswaTidakAktif','SiswaController@daftarSiswaTidakAktif');
    Route::get('daftarTryout','TryoutController@index')->name('daftarTryout');
    Route::get('tambahTryout','TryoutController@tambah')->name('tambahTryout');
    Route::get('daftarTutor','TutorController@daftarTutor');
    Route::get('daftarTutorBelumAktif','TutorController@daftarTutorBelumAktif');
    Route::get('daftarTutorTidakAktif','TutorController@daftarTutorTidakAktif');
    Route::get('tambahSoal/{id}','SoalController@index')->name('tambahSoal');
    Route::get('daftarSoal/{id_to}','TryoutController@lihatSoal')->name('daftarSoal');
    Route::get('status/{id}','SiswaController@status')->name('status');
    Route::get('statusTutor/{id}','TutorController@statusTutor')->name('statusTutor');
    Route::get('kehadiranTutor/{id}','AbsenController@kehadiranTutor')->name('kehadiranTutor');
    Route::get('profileTutorAdmin/{id}','TutorController@profileTutorAdmin')->name('profileTutorAdmin');
    Route::get('profileSiswaAdmin/{id}','SiswaController@profileSiswaAdmin')->name('profileSiswaAdmin');
    Route::post('importExcel','SoalController@importExcel')->name('importExcel');
});

Route::middleware(['tutor'])->group(function () {
    Route::get('tutor','JadwalController@tutor')->name('tutor');
    Route::get('jadwal','JadwalController@jadwalTutor');
    Route::get('profile','TutorController@profileTutor');
    Route::get('detailPendaftaran/{id}','JadwalController@jadwalSiswaTutor')->name('detailJadwal');
    Route::get('detailJadwal/{id}','JadwalController@detailJadwalTutor')->name('detailJadwal');

});

Route::middleware(['siswa'])->group(function () {
    Route::get('/murid','JadwalController@index');
    Route::get('/invoicenya','ProgramController@index');
    Route::get('/invoice','ProgramController@data');
    Route::get('/invoiceDetail','ProgramController@detail');
    Route::get('profileMurid','SiswaController@profileSiswa');
    Route::get('presensi/{id}','AbsenController@indexPresensi')->name('presensi');
    Route::get('kehadiranLes/{id}','AbsenController@kehadiranLes')->name('kehadiranLes');

});

Route::resource('dataTutor','TutorController');
Route::resource('dataSiswa','SiswaController');
Route::resource('paketProgram','InvoiceController');
Route::resource('program','ProgramController');
Route::resource('register', 'Auth\RegisterController');
Route::resource('soal', 'SoalController');
Route::resource('pendaftaranSiswa','JadwalController');
Route::resource('tryout','TryoutController');
Route::resource('absen','AbsenController');


Route::get('/editMurid/{id}', 'Auth\RegisterController@editMurid')->name('editMurid');
Route::get('/editProfile/{id}', 'Auth\RegisterController@editProfile')->name('editProfile');
Route::get('/editAdmin/{id}', 'Auth\RegisterController@editAdmin')->name('editAdmin');
Route::get('/getKabupaten/{id}', 'SiswaController@getKabupaten')->name('getKabupaten');
Route::get('/getKecamatan/{id}', 'SiswaController@getKecamatan')->name('getKecamatan');
Route::post('/upload', 'InvoiceController@proses_upload')->name('upload');
Route::get('/invoicenya_pdf', 'ProgramController@pdf'); 
Route::get('/verify','VerifyController@getVerify')->name('getverify');
Route::post('/verify','VerifyController@postVerify')->name('verify');
Route::get('profileAdmin','Auth\RegisterController@data');
Route::get('/', 'ProgramController@program'); 
Route::get('/landing', 'ProgramController@program');
Route::get('/paketProgram', 'ProgramController@paket');
Route::get('/manajemenProgram', 'ProgramController@paketAdmin');
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::get('informasiTutor','TutorController@informasiTutor');




