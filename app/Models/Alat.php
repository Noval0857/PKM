<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alats'; // Nama tabel dalam basis data

    protected $fillable = ['ph', 'amonia', 'keterangan']; // Atribut yang bisa diisi secara massal

    // Metode lainnya
}