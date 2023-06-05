<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('postlogin', [LoginController::class, 'postlogin'])->name('login.post');

    Route::get('register', [RegisterController::class, 'index'])->name('register');
});



Route::middleware(['auth'])->group(function () {
    Route::post('logout', LogoutController::class)->name('logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::post('mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::delete('mahasiswa/{student}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

    Route::get('dosen', [DosenController::class, 'index'])->name('dosen');

    Route::get('profile', [UserController::class, 'index'])->name('profile');

    Route::resource('latihan', CRUDController::class);

});