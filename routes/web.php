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
    return '<h2>Nama: Gilang Tjoe A On</h2><br><h2>NIM: 0110123243</h2><br><h2>Rombel: SI05</h2>';
});

Route::get('/profil', function () {
    return view('profil',[
        "nama" => "Gilang Tjoe A On",
        "umur" => 20,
        "email" => "gtjoeon@sample.com",
        "kampus" => "Harvard University",
        "alamat" => "Jakarta"

    ]);
});


Route::get('/admin', [AdminController::class,'index']);

Route::get('/pasien', [PasienController::class,'index']);

Route::post('/pasien/store', [PasienController::class,'store']);

Route::get('/paramedik', [ParamedikController::class,'index']);

Route::get('/periksa', [PeriksaController::class,'index']);

Route::get('/kelurahan', [KelurahanController::class,'index']);

Route::get('/unit_kerja', [Unit_kerjaController::class,'index']);