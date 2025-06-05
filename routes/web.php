<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('dashboard');
});
Route::view('/kartu-keluarga', 'kartu_keluarga');
Route::resource('penduduk', App\Http\Controllers\PendudukController::class);
Route::get('penduduk-export', [App\Http\Controllers\PendudukController::class, 'export'])->name('penduduk.export');
Route::resource('kartu-keluarga', App\Http\Controllers\KartuKeluargaController::class);
Route::get('kartu-keluarga-export', [App\Http\Controllers\KartuKeluargaController::class, 'export'])->name('kartu-keluarga.export');
Route::view('/pegawai', 'pegawai');
Route::resource('pegawai', App\Http\Controllers\PegawaiController::class);
Route::view('/pelayanan-surat', 'pelayanan_surat');
Route::view('/arsip-masuk', 'arsip_masuk');
Route::view('/arsip-keluar', 'arsip_keluar');
Route::view('/menu-management', 'menu_management');
Route::view('/role-access', 'role_access');
Route::view('/pengguna', 'pengguna');
Route::view('/profil', 'profil');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
