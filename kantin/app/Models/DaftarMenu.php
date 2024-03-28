<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarMenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_menu',
        'kategori',
        'harga',
        'stock',
        'gambar',
    ];
}
