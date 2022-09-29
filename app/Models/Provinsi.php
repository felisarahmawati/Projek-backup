<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = "provinsis"; //memanggil tabel provinsis

    // menggunakan ini agar semua file atau softfile bisa dimasukan semua kedalem database
    protected $guarded = ['']; 
}
