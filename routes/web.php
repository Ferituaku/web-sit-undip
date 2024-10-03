<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DekanController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\PilihMenu;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

// Grup rute untuk tamu (guest)
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthManager::class, 'login'])->name('login');
    Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
});

// Grup rute yang memerlukan autentikasi (auth)
Route::group(['middleware' => 'auth'], function () {

    // Rute untuk mahasiswa
    Route::group(['middleware' => 'role:mahasiswa'], function () {
        Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'mahasiswa'])->name('dashboard');
        Route::get('/mahasiswa/biaya', [MahasiswaController::class, 'biaya'])->name('biaya');
        Route::get('/mahasiswa/jadwal', [MahasiswaController::class, 'jadwal'])->name('jadwal');
        Route::get('/mahasiswa/herreg', [MahasiswaController::class, 'herreg'])->name('herreg');
        Route::get('/mahasiswa/akademisi', [MahasiswaController::class, 'akademisi'])->name('akademisi');
        Route::get('/mahasiswa/kulon', [MahasiswaController::class, 'kulon'])->name('kulon');
    });

    // Rute untuk akademik
    Route::group(['middleware' => 'role:akademik'], function () {
        Route::get('/akademik/dashboard', [AkademikController::class, 'akademik'])->name('dashboard');
    });

    // Rute untuk dosen, kaprodi, dan dekan
    Route::group(['middleware' => ['role:dosen']], function () {
        Route::get('/dosen/dashboard', [DekanController::class, 'dosenalter'])->name('dosen.dashboard');
        Route::get('/dosen/verifikasi', [DosenController::class, 'verifikasi'])->name('verifikasi');
        Route::get('/dosen/lihatjadwal', [DosenController::class, 'lihatjadwal'])->name('lihatjadwal');
        Route::get('/dosen/konsultasi', [DosenController::class, 'konsultasi'])->name('konsultasi');
    });

    // Rute untuk kaprodi
    Route::group(['middleware' => 'role:kaprodi'], function () {
        Route::get('/kaprodi/dashboard', [KaprodiController::class, 'kaprodi'])->name('kaprodi.dashboard');
        Route::get('/dosen/dashboard', [DekanController::class, 'dosenalter'])->name('dashboard');
    });

    // Rute untuk dekan
    Route::group(['middleware' => 'role:dekan'], function () {
        Route::get('/dekan/dashboard', [DekanController::class, 'dekan'])->name('dekan.dashboard');
        Route::get('/dosen/dashboard', [DosenController::class, 'dosen'])->name('dosen.dashboard');
    });

    // Rute untuk pemilihan menu oleh dekan dan kaprodi
    Route::get('/pilihmenu', [PilihMenu::class, 'pilihmenu'])->name('pilihmenu')->middleware('role:dekan,kaprodi');

    // Logout
    Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
});
