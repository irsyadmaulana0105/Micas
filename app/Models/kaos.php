<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaos extends Model
{
    use HasFactory;

    protected $table = 'kaos';

    // Sesuaikan kolom yang diizinkan untuk mass assignment
    protected $fillable = ['nama_kaos', 'size'];
}
