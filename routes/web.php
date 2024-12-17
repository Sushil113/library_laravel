<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');