<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama' => "admin",
                'email' => "admin@gmail.com",
                "password" => bcrypt("123456"),
                'role' => "admin",
                'nomor' => '123456',
            ],
            [
                'nama' => "user",
                'email' => "user@gmail.com",
                "password" => bcrypt("123456"),
                'role' => "user",
                'nomor' => '123456',
            ],
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
