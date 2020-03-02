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

//Register Login Controller
Route::post('register','API\AuthControllerAPI@store');
Route::post('login','API\AuthControllerAPI@login');





