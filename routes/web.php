<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('fakultas.create');
});

Route::resource('/fakultas', FakultasController::class)->parameters(['fakultas' => 'fakultas']);
Route::resource('/periode', PeriodeController::class);
Route::resource('/berita', BeritaController::class);
Route::resource('/prodi', ProdiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);