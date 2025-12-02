<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('settings')->insert([
            'map_embed_link' => '1', // boleh dikosongkan dulu
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
