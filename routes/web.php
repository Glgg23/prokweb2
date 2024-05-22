<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class,'index']);

Route::get('/pasien', [PasienController::class,'index']);

Route::get('/salam', function () {
    return '<h2>Selamat datang di laravel</h2>';
});

Route::get('/profile', function () {
    return view('profile',[
        "nama" => "Gilang Pratama",
        "umur" => 20,
        "email" => "gilangpratama1533@gmail.com",
        "kampus" => "STT NF",
        "jurusan" => "Sistem Informasi"
    ]);
});