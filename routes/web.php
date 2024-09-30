<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DekanController;

Route::get('/', function () {
    return view('login');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthManager::class, 'login'])->name('login');
    Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/akademik/dashboard', [AkademikController::class, 'akademik'])->middleware('role:akademik');
    Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'mahasiswa'])->middleware('role:mahasiswa');
    Route::get('/dosen/dashboard', [DosenController::class, 'dosen'])->middleware('role:dosen');
    Route::get('/kaprodi/pilihmenu', [KaprodiController::class, 'kaprodi'])->middleware('role:kaprodi');
    Route::get('/dekan/pilihmenu', [DekanController::class, 'dekan'])->middleware('role:dekan');
    Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
});

// Role-based access control (RBAC)
// Route::group(['middleware' => 'auth'], function () {
//     // Dashboard untuk role mahasiswa
//     Route::group(['middleware' => 'role:mahasiswa'], function () {
//         Route::get('/mahasiswa/dashboard', function () {
//             return view('mahasiswa.dashboard');
//         })->name('mahasiswa.dashboard');
//     });

//     // Dashboard untuk role dosen
//     Route::group(['middleware' => 'role:dosen'], function () {
//         Route::get('/dosen/dashboard', function () {
//             return view('dosen.dashboard');
//         })->name('dosen.dashboard');
//     });

//     // Dashboard untuk role operator
//     Route::group(['middleware' => 'role:operator'], function () {
//         Route::get('/operator/dashboard', function () {
//             return view('operator.dashboard');
//         })->name('operator.dashboard');
//     });
// });
