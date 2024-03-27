<?php

namespace Database\Seeders;

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
        $menus = array(
            array('id' => '1', 'nama' => 'Salmon Souse', 'harga' => '11832', 'stok' => '6', 'gambar' => 'https://images.unsplash.com/photo-1467003909585-2f8a72700288?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTJ8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:12', 'updated_at' => '2024-03-22 08:29:12'),
            array('id' => '2', 'nama' => 'Crab Reecehese', 'harga' => '28766', 'stok' => '41', 'gambar' => 'https://images.unsplash.com/photo-1559742811-822873691df8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTN8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:13', 'updated_at' => '2024-03-22 08:29:13'),
            array('id' => '3', 'nama' => 'Dorayaki', 'harga' => '21440', 'stok' => '6', 'gambar' => 'https://images.unsplash.com/photo-1559598467-8be25b6dc34f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTN8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:14', 'updated_at' => '2024-03-22 08:29:14'),
            array('id' => '4', 'nama' => 'Cheese Spageti', 'harga' => '28333', 'stok' => '41', 'gambar' => 'https://images.unsplash.com/photo-1481931098730-318b6f776db0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTR8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:14', 'updated_at' => '2024-03-22 08:29:14'),
            array('id' => '5', 'nama' => 'Roti Bakar', 'harga' => '31283', 'stok' => '39', 'gambar' => 'https://images.unsplash.com/photo-1484723091739-30a097e8f929?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTV8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:15', 'updated_at' => '2024-03-22 08:29:15'),
            array('id' => '6', 'nama' => 'Sushi', 'harga' => '11517', 'stok' => '40', 'gambar' => 'https://images.unsplash.com/photo-1554998171-706e730d721d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTV8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:15', 'updated_at' => '2024-03-22 08:29:15'),
            array('id' => '7', 'nama' => 'Telor Dadar', 'harga' => '37058', 'stok' => '28', 'gambar' => 'https://images.unsplash.com/photo-1525351326368-efbb5cb6814d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTZ8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:16', 'updated_at' => '2024-03-22 08:29:16'),
            array('id' => '8', 'nama' => 'Salad', 'harga' => '19123', 'stok' => '42', 'gambar' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTd8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:17', 'updated_at' => '2024-03-22 08:29:17'),
            array('id' => '9', 'nama' => 'Ice Cream', 'harga' => '43040', 'stok' => '28', 'gambar' => 'https://images.unsplash.com/photo-1497034825429-c343d7c6a68f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTd8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:17', 'updated_at' => '2024-03-22 08:29:17'),
            array('id' => '10', 'nama' => 'Spageti', 'harga' => '16905', 'stok' => '8', 'gambar' => 'https://images.unsplash.com/photo-1516100882582-96c3a05fe590?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTh8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:18', 'updated_at' => '2024-03-22 08:29:18')
        );
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 30; $i++) {
            $nama_pembeli = $faker->name;
            $id_pesanan = $faker->unique()->randomNumber(5);
            $total_harga = $faker->randomNumber(6);
            $tanggal_transaksi = $faker->date();
            $metode_pembayaran = $faker->randomElement(['Cash', 'Transfer', 'Credit Card']);
            $keterangan = $faker->sentence;
            $gender = $faker->randomElement(['men', 'women']);
            $number = $faker->numberBetween(1, 99);
            $foto = "https://randomuser.me/api/portraits/{$gender}/{$number}.jpg";
            $bukti_pembayaran = "https://picsum.photos/200/300?random=1";

            DB::table('pesanans')->insert([
                'nama_pembeli' => $nama_pembeli,
                'id_pesanan' => $id_pesanan,
                'total_harga' => $total_harga,
                'tanggal_transaksi' => $tanggal_transaksi,
                'metode_pembayaran' => $metode_pembayaran,
                'keterangan' => $keterangan,
                'foto' => $foto,
                'bukti_pembayaran' => $bukti_pembayaran,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            $name = $faker->name;
            $email = $faker->unique()->safeEmail;
            $phone = $faker->phoneNumber;
            $alamat = $faker->address;
            $gender = $faker->randomElement(['men', 'women']);
            $number = $faker->numberBetween(1, 99);

            DB::table('konsumens')->insert([
                'nama_pembeli' => $name,
                'email' => $email,
                'tlp' => $phone,
                'alamat' => $alamat,
                'foto' => "https://randomuser.me/api/portraits/{$gender}/{$number}.jpg", // Menggunakan URL gambar profil acak dari Random User Generator
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $userData = [
            [
                'nama' => "admin",
                'email' => "admin@gmail.com",
                "password" => bcrypt("123456"),
                'role' => "admin",
                'nomor' => '123456',
                'gambar' => 'https://randomuser.me/api/portraits/women/65.jpg',
            ],
            [
                'nama' => "user",
                'email' => "user@gmail.com",
                "password" => bcrypt("123456"),
                'role' => "user",
                'nomor' => '123456',
                'gambar' => 'https://randomuser.me/api/portraits/women/65.jpg',
            ],
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
