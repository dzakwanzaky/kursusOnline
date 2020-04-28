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
Route::get('TryoutSD','API\TryoutControllerAPI@tryoutSD');
Route::get('TryoutSMP','API\TryoutControllerAPI@tryoutSMP');
Route::get('TryoutSMA','API\TryoutControllerAPI@tryoutSMA');
Route::get('TryoutSBMPTN','API\TryoutControllerAPI@tryoutSBMPTN');
Route::get('soal/{id}','API\TryoutControllerAPI@soal');

//MapelController
Route::get('mapel','API\MapelControllerAPI@index');
Route::get('mapel/{id_program}','API\MapelControllerAPI@lihatMapel');


Route::middleware('auth:api')->group(function(){

    //Siswa Controller
    Route::post('dataSiswa','API\SiswaControllerAPI@store');
    Route::get('dataSiswa','API\SiswaControllerAPI@siswa');
    Route::put('dataSiswa/{id}','API\SiswaControllerAPI@update');

    //TutorController
    Route::get('dataTutor','API\TutorControllerAPI@dataTutor');
    Route::post('dataTutor','API\TutorControllerAPI@store');
    Route::put('dataTutor/{id}','API\TutorControllerAPI@update');

    //Get Data Kabupaten & Kecamatan
    Route::get('/getKabupaten/{id}', 'API\SiswaController@getKabupaten')->name('getKabupaten');
    Route::get('/getKecamatan/{id}', 'API\SiswaController@getKecamatan')->name('getKecamatan');





    //JadwalController
        //tutor
    Route::get('pendaftaranMurid','API\JadwalControllerAPI@tutor');   
    Route::get('jadwalTutor','API\JadwalControllerAPI@jadwalTutor');   
    Route::get('detailJadwalTutor/{id}','API\JadwalControllerAPI@detailJadwalTutor');   
        //siswa
    Route::get('jadwalSiswa','API\JadwalControllerAPI@index');
    Route::put('jadwalSiswa/{id}','API\JadwalControllerAPI@update');   
    Route::post('pendaftaranJadwal','API\JadwalControllerAPI@store'); 

    //FormulirController
    Route::post('formulir','API\FormulirControllerAPI@store');

    //InvoiceController
    Route::get('invoice','API\InvoiceControllerAPI@index');
    Route::post('upload','API\InvoiceControllerAPI@proses_upload');
        
    //ProgramController
    Route::get('program','API\ProgramControllerAPI@index');

     //ProgramController
     Route::get('kehadiran','API\AbsensiControllerAPI@show');

    //ChangePasswordController
    Route::post('changePassword','API\ChangePasswordControllerAPI@store');

});




