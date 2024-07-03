<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dokumentasiController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('login');
});

//register
Route::post('/register', [AuthController::class, 'register' ])->name('register');
Route::get('/registerview', [AuthController::class, 'registerview' ])->name('registerview');

//login
Route::post('/login', [AuthController::class, 'login' ])->name('login');
Route::get('/loginview', [AuthController::class, 'loginview' ])->name('loginview');

//logout
Route::get('/logout', [AuthController::class, 'logout' ])->name('logout');


//web
Route::get('/beranda', [berandaController::class, 'beranda'])->name('beranda');
Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
Route::post('/generate-token', [DashboardController::class, 'generateToken'])->name('generate.token');
Route::get('/dokumentasi', [dokumentasiController::class, 'dokumentasi'])->name('dokumentasi');

//Aplikasi Sederhana
Route::match(['get', 'post'], '/form', [FormController::class, 'form'])->name('form');
