<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    protected $fillable = ['name','nm_kriteria','nm_karakter','nm_genre','hasil_kriteria','hasil_karakter','hasil_genre'];
}
