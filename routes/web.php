<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//AuthController routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('loginpage');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');
Route::get('/verification', [AuthController::class,'showOtpPage'])->name('verification');
Route::post('/verification', [AuthController::class, 'verifyOtp'])->name('verify');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

//UserController routes
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
