<?php

use App\Http\controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Router Selamat Datang Jika Router pcr
Route::get('/pcr', function () {
    return 'Selamat Datang Di Website Kampus PCR';
});

// Router  Jika Router mahasiswa
Route::get('/mahasiswa', function () {
    return 'Guten Morgen Studentin';
});

//Router Yang Menggunakan Parameter
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama Saya: ' .$param1;
});

//Router Parameter Bersifat Required
Route::get('/nim/{param1?}', function ($param1 = ''){
    return 'Nim Saya: ' .$param1;
});

//Route Mengarah ke MahasiswaController dan Function show
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

//Router View halaman about
Route::get('/about', function () {
    return view('halaman-about');
});

//hahahaha
Route::get('/about', function () {
    return view('halaman-about');
});

