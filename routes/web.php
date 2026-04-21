<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

});

Route::resource('fakultas', FakultasController::class);