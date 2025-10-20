<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Static routes
Route::get('/pcr', fn() => 'Selamat Datang Di Website Kampus PCR');
Route::get('/mahasiswa', fn() => 'Guten Morgen Studentin');
Route::get('/about', fn() => view('halaman-about'));

// Parameter routes
Route::get('/nama/{param1}', fn($param1) => 'Nama Saya: ' . $param1);
Route::get('/nim/{param1?}', fn($param1 = '') => 'Nim Saya: ' . $param1);

// Controller routes
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);
Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');


//Router View halaman about
Route::get('/about', function () {
    return view('halaman-about');
});

//hahahaha
Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

// Auth routes
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');


// Home page (setelah login)
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pegawai', [\App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai.index');

//Router Dashboard Admin
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Router Pelanggan
Route::resource('pelanggan', PelangganController::class);

