<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = "pasien";
    // table adalah properti laravel yg didalam nya tekoneksi dengan
    // nama tabel yg mau kita tampilkan datanya
    // tetapi hanya dapat di akses di dalam class model tersebut ataupun turunannya

    protected $fillable = ['id','kode','nama','tmp_lahir','gender','email','alamat','kelurahan_id'];
    // fillable adalah variable dalam model elaquent yg tugasnya
    // membatasi kolam mana yg dapat di isi atau di input
}
