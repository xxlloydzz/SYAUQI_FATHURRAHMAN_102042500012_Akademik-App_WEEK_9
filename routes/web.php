<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/materi', [DashboardController::class, 'materi'])->middleware('auth')->name('materi.index');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
});

Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosen', [DashboardController::class, 'dosen'])->name('dosen.index');
});

Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/mahasiswa', [DashboardController::class, 'mahasiswa'])->name('mahasiswa.index');
});

Route::middleware(['auth', 'role:admin,dosen'])->group(function () {
    Route::get('/kelola-materi', [DashboardController::class, 'kelolaMateri'])->name('materi.kelola');
    Route::get('/kelola-nilai', [DashboardController::class, 'kelolaNilai'])->name('nilai.kelola');
});

// dosen gak boleh akses nilai pribadi
Route::get('/nilai-pribadi', [DashboardController::class, 'nilaiPribadi'])
    ->middleware(['auth', 'role:admin,mahasiswa'])
    ->name('nilai.pribadi');
