<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Youthera', 'link_eksternal' => 'https://tokopedia.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Theraskin', 'link_eksternal' => 'https://shopee.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'L\'Essential', 'link_eksternal' => 'https://lazada.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}