<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KiosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kios', [KiosController::class, 'index']);