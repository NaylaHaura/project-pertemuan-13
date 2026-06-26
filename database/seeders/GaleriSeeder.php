<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('galeris')->insert([
            ['judul' => 'Kantor L\'Essential', 'gambar' => 'default.jpg', 'keterangan' => 'Foto kantor pusat PT L\'Essential.', 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Tim L\'Essential', 'gambar' => 'default.jpg', 'keterangan' => 'Tim profesional PT L\'Essential.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}