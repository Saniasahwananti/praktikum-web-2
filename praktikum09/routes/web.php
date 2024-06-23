<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\kelurahanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/dokter', function () {
    return view('dokter');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/kelurahan', function () {
    return view('kelurahan');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/pasien', [PasienController::class,'index'])->name('pasiens.index');
Route::get('/admin/pasien/create', [PasienController::class,'create'])->name('pasiens.create');
Route::post('/admin/pasien/store', [PasienController::class,'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
Route::get('/admin/periksa', [PeriksaController::class,'index']);
Route::get('/admin/dokter', [DokterController::class,'index']);
Route::get('/admin/pegawai', [PegawaiController::class,'index']);

Route::get('/admin/kelurahan', [KelurahanController::class,'index'])->name('kelurahans.index');
Route::get('/admin/kelurahan/create', [KelurahanController::class,'create'])->name('kelurahans.create');
Route::post('/admin/kelurahan/store', [KelurahanController::class,'store'])->name('kelurahans.store');
Route::get('/admin/kelurahan/{kelurahan}', [KelurahanController::class, 'show'])->name('kelurahans.show');
Route::get('/admin/kelurahan/{kelurahan}/edit', [kelurahanController::class, 'edit'])->name('kelurahans.edit');
Route::put('/admin/kelurahan/{kelurahan}', [KelurahanController::class, 'update'])->name('kelurahans.update');
Route::delete('/admin/kelurahan/{kelurahan}', [KelurahanController::class, 'destroy'])->name('kelurahans.destroy');


