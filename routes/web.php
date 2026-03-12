<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\testContrller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');  
});

Route::get('/', [testContrller::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/info', [InfoController::class, 'index']);
