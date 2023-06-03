<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Login Route
Route::get('/', [LoginController::class, 'index'])->name('login');

// Register Route
Route::get('register', [RegisterController::class, 'index'])->name('register');

// Landing Page Route
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Data Mahasiswa Route
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::post('mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::delete('mahasiswa/{student}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

// Data Dosen Route
Route::get('dosen', [DosenController::class, 'index'])->name('dosen');

// User Route
Route::get('profile', [UserController::class, 'index'])->name('profile');

// Latihan Route
Route::resource('latihan', CRUDController::class);