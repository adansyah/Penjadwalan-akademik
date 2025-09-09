<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [HomeController::class, 'index']);


Route::get('/akademik', function () {
    return view('page.akademik');
});
Route::get('/ruangan', function () {
    return view('page.ruangan_kelas');
});
Route::get('/kehadiran', function () {
    return view('page.kehadiran');
});

Route::get('profile', [ProfileController::class, 'index']);
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('login/staff', [AuthController::class, 'log_staf'])->name('log_staf');
Route::get('login/mahasiswa', [AuthController::class, 'log_mahasiswa'])->name('log_mahasiswa');
