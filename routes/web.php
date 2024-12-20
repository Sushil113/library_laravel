<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;

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
Route::get('/forgetpassword', [AuthController::class, 'forgetpassword'])->name('forgetpassword');
Route::post('/forgetpassword', [AuthController::class, 'sendResetLinkEmail'])->name('sendResetLinkEmail');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

//google controller
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//UserController routes
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
