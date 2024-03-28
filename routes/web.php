<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('testing');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/jabatan', function () {
    return view('jabatan');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/home', function () {
    return view('home');
});
