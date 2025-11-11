<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin Tasty Food',
            'email' => 'admin@tastyfood.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'phone' => '+62 812 3456 7890',
            'address' => 'Jakarta, Indonesia',
            'is_active' => true,
        ]);

        // User biasa (optional)
        User::create([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone' => '+62 812 3456 7891',
            'address' => 'Bandung, Indonesia',
            'is_active' => true,
        ]);
    }
}
