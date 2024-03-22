<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $response = Http::get('https://api.unsplash.com/photos/random', [
                'client_id' => env('YOUR_UNSPLASH_ACCESS_KEY'),
                'query' => 'food', // Query untuk gambar makanan
            ]);

            $data = $response->json();

            DB::table('menus')->insert([
                'nama' => 'Menu ' . ($i + 1),
                'harga' => rand(10000, 50000), // Harga acak antara 10.000 hingga 50.000
                'stok' => rand(5, 50), // Stok acak antara 5 hingga 50
                'gambar' => $data['urls']['regular'], // URL gambar dari Unsplash
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
