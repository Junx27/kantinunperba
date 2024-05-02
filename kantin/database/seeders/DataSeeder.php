<?php

namespace Database\Seeders;

use App\Models\DaftarMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Konsumen;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataMenu = [
            [
                'nama_menu' => "nasi goreng",
                'kategori' => "makanan",
                'harga' => 20000,
                "stock" => 5,
                'gambar' => 'gambar-menu-sementara/nPf40zxqxYu6a10uFm3UwWTieqn0k40z37Zh95CN.jpg',
                'deskripsi' => 'Deskripsi makanan adalah teks singkat yang menjelaskan tentang makanan tertentu.',
                'user_id' => 1,
            ],
            [
                'nama_menu' => "es jeruk",
                'kategori' => "minuman",
                'harga' => 1000,
                "stock" => 5,
                'gambar' => 'gambar-menu-sementara/2x0ECRpbAUL2vvuu4vEM3HDx3qO9z4wk7Rzd6Wni.jpg',
                'deskripsi' => 'Deskripsi makanan adalah teks singkat yang menjelaskan tentang makanan tertentu.',
                'user_id' => 1,
            ],
        ];
        $userData = [
            [
                'nama' => "admin",
                'gender' => "laki-laki",
                'email' => "admin@gmail.com",
                "password" => bcrypt("123456"),
                'role' => "admin",
                'nomor' => '123456',
                'gambar' => 'gambar-profil-sementara/tbVwzew8zmgkdzlk1dLaUpqPOcKoRF5I3zJ9hSTp.jpg',
            ],
            [
                'nama' => "user",
                'gender' => "laki-laki",
                'email' => "user@gmail.com",
                "password" => bcrypt("123456"),
                'role' => "user",
                'nomor' => '123456',
                'gambar' => 'gambar-profil-sementara/oDQ6vKQCERr4geS26TWv8p14orH3fPyDSPHH8C5f.jpg',
            ],
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
        foreach ($dataMenu as $key => $value) {
            DaftarMenu::create($value);
        }
    }
}
