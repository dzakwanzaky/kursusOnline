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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/program', function () {
    return view('base/program_page');
});
Route::get('/kontak', function () {
    return view('base/kontak_page');
});
Route::get('/tentangKami', function () {
    return view('base/tentang_kami_page');
});
Route::get('/login', function () {
    return view('base/login_page');
});
Route::get('/register', function () {
    return view('base/register_page');
});

//Kalau menggunakan Contoller
Route::get('/admin', 'AdminController@index');
Route::get('/landing', 'BaseController@index');

Route::get('/invoice', function () {
    return view('admin/invoice');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify','VerifyController@getVerify')->name('getverify');
Route::post('/verify','VerifyController@postVerify')->name('verify');