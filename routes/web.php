<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;


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


Route::post('/certificates', [CertificateController::class, 'store'])->name('certificates.store');
Route::delete('/certificates/{id}', [CertificateController::class, 'destroy'])->name('certificates.destroy');


Route::post('/certificates', [CertificateController::class, 'store'])->name('certificates.store');
Route::get('/certificates/{id}/edit', [CertificateController::class, 'edit'])->name('certificates.edit'); // Tambah ini
Route::put('/certificates/{id}', [CertificateController::class, 'update'])->name('certificates.update');     // Tambah ini
Route::delete('/certificates/{id}', [CertificateController::class, 'destroy'])->name('certificates.destroy');


Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');
Route::get('/skills/{id}/edit', [SkillController::class, 'edit'])->name('skills.edit');
Route::put('/skills/{id}', [SkillController::class, 'update'])->name('skills.update');
Route::delete('/skills/{id}', [SkillController::class, 'destroy'])->name('skills.destroy');


Route::post('/experiences', [ExperienceController::class, 'store'])->name('experiences.store');
Route::get('/experiences/{id}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
Route::put('/experiences/{id}', [ExperienceController::class, 'update'])->name('experiences.update');
Route::delete('/experiences/{id}', [ExperienceController::class, 'destroy'])->name('experiences.destroy');


Route::post('/cv/upload', [CvController::class, 'storeOrUpdate'])->name('cv.upload');
Route::delete('/cv/delete', [CvController::class, 'destroy'])->name('cv.delete');


Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');


Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


Route::post('/abouts', [AboutController::class, 'store'])->name('abouts.store');
Route::get('/abouts/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
Route::put('/abouts/{id}', [AboutController::class, 'update'])->name('abouts.update');
Route::delete('/abouts/{id}', [AboutController::class, 'destroy'])->name('abouts.destroy');


// Route untuk kelola CV Admin
Route::middleware(['auth'])->group(function () {
    Route::post('/admin/profile/cv', [ProfileController::class, 'updateCv'])->name('profile.cv.update');
    Route::delete('/admin/profile/cv', [ProfileController::class, 'destroyCv'])->name('profile.cv.destroy');
});