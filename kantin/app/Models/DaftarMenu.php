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
        'deskripsi',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
