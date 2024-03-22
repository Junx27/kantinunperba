<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate data pesanan secara acak
        $dataPesanan = [];
        for ($i = 1; $i <= 30; $i++) {
            // Ambil foto profil secara acak dari Unsplash
            $response = Http::get('https://api.unsplash.com/photos/random', [
                'client_id' => env('YOUR_UNSPLASH_ACCESS_KEY'),
                'query' => 'profile', // kata kunci untuk foto profil
            ]);
            $foto = $response->json()['urls']['regular'];

            // Data pesanan
            $dataPesanan[] = [
                'nama_pembeli' => 'Dinda Ayu Sekar Melati',
                'id_pesanan' => 'ORD00' . $i,
                'total_harga' => 'Rp ' . rand(100000, 1000000),
                'tanggal_transaksi' => now()->subDays(rand(1, 30))->toDateString(),
                'metode_pembayaran' => 'Transfer Bank',
                'keterangan' => 'Sudah Bayar',
                'foto' => $foto,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert data pesanan ke dalam tabel pesanans
        DB::table('pesanans')->insert($dataPesanan);
    }
}
