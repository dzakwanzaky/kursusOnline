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

Auth::routes(['verify' => true]);


Route::get('/wizardsbm/{program_id}', 'TryoutController@akses')->name('wizardsbm');

Route::get('/tesi', function () {
    return view('base/tes');
});

Route::get('/ping', function () {
    return view('base/ting');
});
Route::get('/pilihMetode', function () {
    return view('base/metode');
});
Route::get('/pakt', 'PaketController@index');
Route::get('/program/{id}/rinci', 'ProgramController@rinci');
Route::get('/program/{id_program}/rinci/{id}', 'ProgramController@tryout')->name('soalFilter');

Route::get('paket/kategori/{id}', 'PaketController@kategori');

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/card', function () {
    return view('base/card');
});

Route::get('/sbmptn', function () {
    return view('base/partsbmptn');
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

Route::get('/probel-dinamis', function () {
    return view('probel-dinamis');
});

use Nexmo\Laravel\Facade\Nexmo;
Route::get('/tes','Controller@tes');



Route::get('/kontak', function () {
    return view('base/kontak_page');
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


Route::get('/paketProgramOnline', function () {
    return view('base/paket_program_page');
});

Route::get('/paketProgramOffline', function () {
    return view('base/paket_program_offline');
});


Route::get('/paketProgram2', function () {
    return view('base/paket_programOnline_page');
});

Route::get('/pendaftaranTutor', function () {
    return view('base/pendaftaranTutor_page');
});

$router->get('/nexmo', function () use ($router) {
    app(Nexmo\Client::class);
});


//Halaman dashboard Murid
Route::get('/murid', function () {
    return view('murid/murid');
});
Route::get('/verify', function () {
    return view('auth/verify');
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
    Route::get('daftarMapel/{id_program}','ProgramController@lihatMapel')->name('daftarMapel');
    Route::get('tambahMapel/{id}','MapelController@index')->name('tambahMapel');
    Route::get('status/{id}','SiswaController@status')->name('status');
    Route::get('statusTutor/{id}','TutorController@statusTutor')->name('statusTutor');
    Route::get('kehadiranTutor/{id}','AbsenController@kehadiranTutor')->name('kehadiranTutor');
    Route::get('profileTutorAdmin/{id}','TutorController@profileTutorAdmin')->name('profileTutorAdmin');
    Route::get('profileSiswaAdmin/{id}','SiswaController@profileSiswaAdmin')->name('profileSiswaAdmin');
    Route::get('tryoutAktif','FormulirController@formulirAktif')->name('tryoutAktif');
    Route::get('tryoutBelumAktif','FormulirController@formulirBelumAktif')->name('tryoutAktif');
    Route::post('importExcel','SoalController@importExcel')->name('importExcel');
    Route::get('jadwalMenungguOnline','JadwalController@jadwalMenungguOnline');
    Route::get('jadwalDiajukanOnline','JadwalController@jadwalDiajukanOnline');
    Route::get('jadwalAktifOnline','JadwalController@jadwalAktifOnline');
    Route::get('jadwalTidakAktifOnline','JadwalController@jadwalTidakAktifOnline');
});

Route::middleware(['tutor'])->group(function () {
    Route::get('tutor','JadwalController@tutor')->name('tutor');
    Route::get('jadwal','JadwalController@jadwalTutor');
    Route::get('profile','TutorController@profileTutor');
    Route::get('detailPendaftaran/{id}','JadwalController@jadwalSiswaTutor')->name('detailPendaftaran');
    Route::get('detailJadwal/{id}','JadwalController@detailJadwalTutor')->name('detailJadwal');
    Route::get('dataKehadiran/{id}','AbsenController@kehadiran')->name('dataKehadiran');

});

Route::middleware(['siswa'])->group(function () {
    Route::get('/murid','JadwalController@index');
    Route::get('/invoicenya/{id}','ProgramController@index');
    Route::get('/invoice','ProgramController@data');
    Route::get('profileMurid','SiswaController@profileSiswa');
    Route::get('presensi/{id}','AbsenController@indexPresensi')->name('presensi');
    Route::get('kehadiranLes/{id}','AbsenController@kehadiranLes')->name('kehadiranLes');
});

Route::resource('dataTutor','TutorController')->middleware('verified');
Route::resource('dataSiswa','SiswaController');
Route::resource('paketProgram','InvoiceController');
Route::resource('program','ProgramController');
Route::resource('register', 'Auth\RegisterController');
Route::resource('soal', 'SoalController');
Route::resource('pendaftaranSiswa','JadwalController');
Route::resource('tryout','TryoutController');
Route::resource('absen','AbsenController');
Route::resource('formulir','FormulirController');
Route::resource('paket','PaketController');
Route::resource('mapel','MapelController');





Route::get('/editMurid/{id}', 'Auth\RegisterController@editMurid')->name('editMurid');
Route::get('/editProfile/{id}', 'Auth\RegisterController@editProfile')->name('editProfile');
Route::get('/editAdmin/{id}', 'Auth\RegisterController@editAdmin')->name('editAdmin');
Route::get('/getKabupaten/{id}', 'SiswaController@getKabupaten')->name('getKabupaten');
Route::get('/getKecamatan/{id}', 'SiswaController@getKecamatan')->name('getKecamatan');
Route::post('/upload', 'InvoiceController@proses_upload')->name('upload');
Route::post('/unggah', 'InvoiceController@proses_unggah')->name('unggah');
Route::get('/invoicenya_pdf', 'ProgramController@pdf'); 
// Route::get('/verify','VerifyController@getVerify')->name('getverify');
// Route::post('/verify','VerifyController@postVerify')->name('verify');
Route::get('profileAdmin','Auth\RegisterController@data');
Route::get('/manajemenProgram', 'ProgramController@manajemenProgram')->name('manajemenProgram');
Route::get('/manajemenPaket', 'PaketController@manajemenPaket')->name('manajemenPaket');
Route::get('/tambahProgram','ProgramController@tambah')->name('tambahProgram');
Route::get('/tambahPaket','PaketController@tambah')->name('tambahPaket');
Route::get('/probel-dinamis','ProgramController@program')->name('probel-dinamis');
Route::get('/invoiceDetail','ProgramController@detail');
Route::get('/invoicePDF/{murid_id}','ProgramController@pdf')->name('invoicePDF');

//base
Route::get('/pendaftaranProgram1','JadwalController@program1');
Route::get('/pendaftaranProgram2','JadwalController@program2');
Route::get('/pendaftaranProgram3','JadwalController@program3');
Route::get('/pendaftaranProgramOnline1','JadwalController@programOnline1');
Route::get('/pendaftaranProgramOnline2','JadwalController@programOnline2');
Route::get('/pendaftaranProgramOnline3','JadwalController@programOnline3');



Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::get('informasiTutor','TutorController@informasiTutor');

Route::get('sd','TryoutController@tryoutSD')->name('sd');
Route::get('smp','TryoutController@tryoutSMP')->name('smp');
Route::get('sma','TryoutController@tryoutSMA')->name('sma');
Route::get('soalTO/{id}','TryoutController@soal')->name('soalTO');
Route::get('endhalaman','FormulirController@index')->name('endhalaman');

Route::get('/testimoni', 'TestimoniController@testimoni')->name('testimoni');
Route::get('/landing', 'TestimoniController@home');
Route::get('/', 'TestimoniController@home');
Route::get('/testimoni/add','TestimoniController@add');
Route::post('/testimoni/create','TestimoniController@create');
Route::get('/testimoni/{id}/edit', 'TestimoniController@edit')->name('testimoni.edit');
Route::post('/testimoni/{id}/update', 'TestimoniController@update')->name('testimoni.update');
Route::get('/testimoni/{id}/delete', 'TestimoniController@delete')->name('testimoni.delete');





