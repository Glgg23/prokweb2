<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\Unit_kerjaController;
use App\Http\Controllers\KelurahanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return '<h2>Nama: Arizal Muhamad Ridwan</h2><br><h2>NIM: 0110123202</h2><br><h2>Rombel: SI05</h2>';
});

Route::get('/profil', function () {
    return view('profil',[
        "nama" => "Arizal Muhamad Ridwan",
        "umur" => 20,
        "email" => "Arizal@sample.com",
        "kampus" => "STT terpadu Nurul Fikri",
        "alamat" => "Bogor"

    ]);
});


Route::get('/admin', [AdminController::class,'index']);

Route::get('/pasien', [PasienController::class,'index']);

Route::post('/pasien/store', [PasienController::class,'store']);

Route::get('/pasien/detail/{id}', [PasienController::class,'show']);

Route::get('/pasien/edit/{id}', [PasienController::class,'edit']);

Route::post('/pasien/update/{id}', [PasienController::class,'update']);

Route::get('/pasien/delete/{id}', [PasienController::class,'destroy']);

Route::get('/paramedik', [ParamedikController::class,'index']);

Route::post('/paramedik/store', [ParamedikController::class,'store']);

Route::get('/periksa', [PeriksaController::class,'index']);

Route::post('/periksa/store', [PeriksaController::class,'store']);

Route::get('/kelurahan', [KelurahanController::class,'index']);

Route::post('/kelurahan/store', [KelurahanController::class,'store']);

Route::get('/unit_kerja', [Unit_kerjaController::class,'index']);

Route::post('/unit_kerja/store', [Unit_kerjaController::class,'store']);