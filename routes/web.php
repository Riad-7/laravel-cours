<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\testContrller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');  
});

Route::get('/profiles', [ProfilController::class, 'index'])->name('profiles.index');
Route::get('/profiles/{id}', [ProfilController::class, 'show'])->where('id', '\d+')->name('profile.show');
Route::get('/info', [InfoController::class, 'index'])->name('info.index');
Route::get('/profiles/create', [ProfilController::class, 'create'])->name('create');
Route::post('/profiles/store', [ProfilController::class, 'store'])->name('store');
