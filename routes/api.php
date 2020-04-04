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
Route::post('register','API\AuthControllerAPI@store');
Route::post('login','API\AuthControllerAPI@login');



Route::middleware('auth:api')->group(function(){

    //Siswa Controller
    Route::get('dataSiswa','API\SiswaControllerAPI@index');
    Route::post('dataSiswa','API\SiswaControllerAPI@store');
    Route::get('dataSiswa/{id}','API\SiswaControllerAPI@show');
    Route::put('dataSiswa/{id}','API\SiswaControllerAPI@update');
    Route::get('profilSiswa','API\SiswaControllerAPI@profileSiswa');

    //TutorController
    Route::get('dataTutor','API\TutorControllerAPI@index');
    Route::post('dataTutor','API\TutorControllerAPI@store');
    Route::get('dataTutor/{id}','API\TutorControllerAPI@show');
    Route::put('dataTutor/{id}','API\TutorControllerAPI@update');
    Route::get('profilTutor','API\TutorControllerAPI@profileTutor');

    //TryoutController
    Route::get('TryoutSD','API\TryoutControllerAPI@tryoutSD');
    Route::get('TryoutSMP','API\TryoutControllerAPI@tryoutSMP');
    Route::get('TryoutSMA','API\TryoutControllerAPI@tryoutSMA');
    Route::get('TryoutSBMPTN','API\TryoutControllerAPI@tryoutSBMPTN');

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

    //ChangePasswordController
    Route::post('changePassword','API\ChangePasswordControllerAPI@store');

});




