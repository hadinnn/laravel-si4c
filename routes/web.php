<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('fakultas.create');
});

Route::resource('fakultas', FakultasController::class);
Route::resource('periode', PeriodeController::class);
Route::resource('berita', BeritaController::class);
Route::get('/prodi', [ProdiController::class, 'index']);