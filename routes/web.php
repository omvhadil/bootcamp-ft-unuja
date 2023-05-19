<?php

use App\Http\Controllers\Master\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/list-dosen', function () {
    return view('datamaster.dosen.list');
});
Route::get('/list-mahasiswa', function () {
    return view('datamaster.mahasiswa.list');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('dm.mahasiswa');


Route::get('/sign-in', function () {
    return view('sign-in');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/password-reset', function () {
    return view('password-reset');
});
Route::get('/new-password', function () {
    return view('new-password');
});
Route::get('/home', function () {
    return view('home');
});