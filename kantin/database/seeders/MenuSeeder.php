<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = array(
            array('id' => '1', 'nama' => 'Menu 1', 'harga' => '11832', 'stok' => '6', 'gambar' => 'https://images.unsplash.com/photo-1467003909585-2f8a72700288?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTJ8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:12', 'updated_at' => '2024-03-22 08:29:12'),
            array('id' => '2', 'nama' => 'Menu 2', 'harga' => '28766', 'stok' => '41', 'gambar' => 'https://images.unsplash.com/photo-1559742811-822873691df8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTN8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:13', 'updated_at' => '2024-03-22 08:29:13'),
            array('id' => '3', 'nama' => 'Menu 3', 'harga' => '21440', 'stok' => '6', 'gambar' => 'https://images.unsplash.com/photo-1559598467-8be25b6dc34f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTN8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:14', 'updated_at' => '2024-03-22 08:29:14'),
            array('id' => '4', 'nama' => 'Menu 4', 'harga' => '28333', 'stok' => '41', 'gambar' => 'https://images.unsplash.com/photo-1481931098730-318b6f776db0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTR8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:14', 'updated_at' => '2024-03-22 08:29:14'),
            array('id' => '5', 'nama' => 'Menu 5', 'harga' => '31283', 'stok' => '39', 'gambar' => 'https://images.unsplash.com/photo-1484723091739-30a097e8f929?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTV8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:15', 'updated_at' => '2024-03-22 08:29:15'),
            array('id' => '6', 'nama' => 'Menu 6', 'harga' => '11517', 'stok' => '40', 'gambar' => 'https://images.unsplash.com/photo-1554998171-706e730d721d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTV8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:15', 'updated_at' => '2024-03-22 08:29:15'),
            array('id' => '7', 'nama' => 'Menu 7', 'harga' => '37058', 'stok' => '28', 'gambar' => 'https://images.unsplash.com/photo-1525351326368-efbb5cb6814d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTZ8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:16', 'updated_at' => '2024-03-22 08:29:16'),
            array('id' => '8', 'nama' => 'Menu 8', 'harga' => '19123', 'stok' => '42', 'gambar' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTd8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:17', 'updated_at' => '2024-03-22 08:29:17'),
            array('id' => '9', 'nama' => 'Menu 9', 'harga' => '43040', 'stok' => '28', 'gambar' => 'https://images.unsplash.com/photo-1497034825429-c343d7c6a68f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTd8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:17', 'updated_at' => '2024-03-22 08:29:17'),
            array('id' => '10', 'nama' => 'Menu 10', 'harga' => '16905', 'stok' => '8', 'gambar' => 'https://images.unsplash.com/photo-1516100882582-96c3a05fe590?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYxNTh8&ixlib=rb-4.0.3&q=80&w=1080', 'created_at' => '2024-03-22 08:29:18', 'updated_at' => '2024-03-22 08:29:18')
        );
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
