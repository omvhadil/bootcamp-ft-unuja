<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Landing Page Route
Route::get('/', function () {
    return view('pages.landing_page.dashboard');
});

// Data Mahasiswa Route
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::post('mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::delete('mahasiswa/{student}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

// Data Dosen Route
Route::get('/list-dosen', function () {
    return view('pages.dosen.table_dosen');
});

// Latihan Route
Route::resource('latihan', CRUDController::class);


// Route::get('/list-mahasiswa', function () {
//     return view('datamaster.mahasiswa.list');
// });
// Route::get('/sign-in', function () {
//     return view('sign-in');
// });
// Route::get('/sign-up', function () {
//     return view('sign-up');
// });
// Route::get('/password-reset', function () {
//     return view('password-reset');
// });
// Route::get('/new-password', function () {
//     return view('new-password');
// });
// Route::get('/home', function () {
//     return view('home');
// });