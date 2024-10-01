<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DekanController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', function () {
    return view('login');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthManager::class, 'login'])->name('login');
    Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
});

Route::group(['middleware' => 'auth'], function () {
    // rute mahasiswa
    Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'mahasiswa'])->name('dashboard')->middleware('role:mahasiswa');
    Route::get('/mahasiswa/biaya', [MahasiswaController::class, 'biaya'])->name('biaya')->middleware('role:mahasiswa');
    Route::get('/mahasiswa/jadwal', [MahasiswaController::class, 'jadwal'])->name('jadwal')->middleware('role:mahasiswa');
    Route::get('/mahasiswa/herreg', [MahasiswaController::class, 'herreg'])->name('herreg')->middleware('role:mahasiswa');
    Route::get('/mahasiswa/akademisi', [MahasiswaController::class, 'akademisi'])->name('akademisi')->middleware('role:mahasiswa');
    Route::get('/mahasiswa/kulon', [MahasiswaController::class, 'kulon'])->name('kulon')->middleware('role:mahasiswa');

    // rute akademik
    Route::get('/akademik/dashboard', [AkademikController::class, 'akademik'])->name('dashboard')->middleware('role:akademik');

    // rute dosen
    Route::get('/dosen/dashboard', [DosenController::class, 'dosen'])->name('dashboard')->middleware('role:dosen,kaprodi,dekan');
    Route::get('/dosen/verifikasi', [DosenController::class, 'verifikasi'])->name('verifikasi')->middleware('role:dosen,kaprodi,dekan');
    Route::get('/dosen/lihatjadwal', [DosenController::class, 'lihatjadwal'])->name('lihatjadwal')->middleware('role:dosen,kaprodi,dekan');
    Route::get('/dosen/konsultasi', [DosenController::class, 'konsultasi'])->name('konsultasi')->middleware('role:dosen,kaprodi,dekan');

    // rute kaprodi
    Route::get('/kaprodi/dashboard', [KaprodiController::class, 'kaprodi'])->name('dashboard')->middleware('role:kaprodi');

    // rute dekan
    Route::get('/dekan/dashboard', [DekanController::class, 'dekan'])->name('dashboard')->middleware('role:dekan');

    // rute pilih menu untuk dekan dan kaprodi
    Route::get('/pilihmenu', [DekanController::class, 'pilihmenu'])->name('pilihmenu')->middleware('role:dekan,kaprodi');

    // logout
    Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
});
