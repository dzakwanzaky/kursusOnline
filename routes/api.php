<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//AuthController
Route::post('registerSiswa','API\AuthControllerAPI@storeSiswa');
Route::post('registerTutor','API\AuthControllerAPI@storeTutor');
Route::post('login','API\AuthControllerAPI@login');

//TryoutController
Route::get('tryout/{id_program}/{id}','API\TryoutControllerAPI@tryout');
Route::get('soal/{id}','API\TryoutControllerAPI@soal');

//MapelController
Route::get('mapel','API\MapelControllerAPI@index');
Route::get('mapel/{id_program}','API\MapelControllerAPI@lihatMapel');

//ProgramController
Route::get('program','API\ProgramControllerAPI@index');
Route::get('programHas','API\ProgramControllerAPI@program');

//PaketController
Route::get('paket','API\PaketControllerAPI@index');
Route::get('paket/{program_id}','API\PaketControllerAPI@paket');

//TestimoniController
Route::get('testimoni','API\TestimoniControllerAPI@index');

//Get Data Lokasi
Route::get('/getKabupaten/{id}', 'API\SiswaControllerAPI@getKabupaten')->name('getKabupaten');
Route::get('/getKecamatan/{id}', 'API\SiswaControllerAPI@getKecamatan')->name('getKecamatan');
Route::get('/getProvinsi', 'API\SiswaControllerAPI@getProvinsi')->name('getProvinsi');

//FormulirController
Route::post('formulir','API\FormulirControllerAPI@store');

Route::middleware('auth:api')->group(function(){

    //Siswa Controller
    Route::post('dataSiswa','API\SiswaControllerAPI@store');
    Route::get('dataSiswa','API\SiswaControllerAPI@siswa');
    Route::put('dataSiswa/{id}','API\SiswaControllerAPI@update');

    //TutorController
    Route::get('dataTutor','API\TutorControllerAPI@dataTutor');
    Route::post('dataTutor','API\TutorControllerAPI@store');
    Route::put('dataTutor/{id}','API\TutorControllerAPI@update');

    //JadwalController
        //tutor
    Route::get('pendaftaranSiswa','API\JadwalControllerAPI@tutor');   
    Route::get('jadwalTutor','API\JadwalControllerAPI@jadwalTutor');   
    Route::get('detailSiswa/{id}','API\JadwalControllerAPI@detailSiswa');   
    Route::put('jadwalSiswa/{id}','API\JadwalControllerAPI@update');   
        //siswa
    Route::get('jadwalSiswa','API\JadwalControllerAPI@index');
    Route::post('pendaftaranJadwal','API\JadwalControllerAPI@store'); 

    //InvoiceController
    Route::get('invoice','API\InvoiceControllerAPI@index');
    Route::post('invoice','API\InvoiceControllerAPI@proses_upload');
        
    //AbsenController
    Route::get('kehadiran/{id}','API\AbsenControllerAPI@show');
    Route::post('kehadiran','API\AbsenControllerAPI@store');

    //ChangePasswordController
    Route::post('changePassword','API\ChangePasswordControllerAPI@store');

    //AuthController
    Route::post('logout','API\AuthControllerAPI@logout');


});




