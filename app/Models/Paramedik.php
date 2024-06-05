<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paramedik extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'paramedik';

    protected $fillable = ['id','kode','nama','tmp_lahir','tgl_lahir','gender','email','alamat','kelurahan_id'];
    
}