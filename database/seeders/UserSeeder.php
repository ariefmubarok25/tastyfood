<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::firstOrCreate(
            ['email' => 'admin@tastyfood.com'], // cek email dulu
            [
                'name' => 'Admin Tasty Food',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'phone' => '+62 812 3456 7890',
                'address' => 'Jakarta, Indonesia',
                'is_active' => true,
            ]
        );

        User::firstOrCreate(
            ['email' => 'user@example.com'], // cek email dulu
            [
                'name' => 'User Biasa',
                'password' => Hash::make('password'),
                'role' => 'user',
                'phone' => '+62 812 3456 7891',
                'address' => 'Bandung, Indonesia',
                'is_active' => true,
            ]
        );
    }
}
