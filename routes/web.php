<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{InfoController, ProfilController, testContrller};

Route::get('/', function () {
    return view('home');
});

Route::get('/', [testContrller::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/create', [ProfilController::class, 'create']);
Route::post('/profil/create', [ProfilController::class, 'store'])->name('profil.store');
Route::get('/profil/{profil}', [ProfilController::class, 'show'])->name('profil.show');
Route::get('/info', [InfoController::class, 'index']);
