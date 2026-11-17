<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;


// 2. Proses Sistem Login Manual
Route::middleware(['guest'])->group(function () {

    // Menampilkan halaman form login (views/login.blade.php)
    Route::get('/login', [AuthController::class, 'login'])->name('login');

    // Memproses pengecekan email & password saat tombol masuk diklik
    Route::post('/login', [AuthController::class, 'autentikasi'])->name('login.proses');
});

// Proses Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// 3. Akses Dashboard CRUD Admin (Wajib Login)
Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [ProjectController::class, 'dashboard'])->name('dashboard');
    
    Route::resource('projects', ProjectController::class)->except(['index']);
});

// 1. Tampilan awal portfolio untuk umum (views/user/index.blade.php)
Route::get('/', [ProjectController::class, 'index'])->name('user.index');