<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Produk A', 'link_eksternal' => 'https://tokopedia.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Produk B', 'link_eksternal' => 'https://shopee.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Produk C', 'link_eksternal' => 'https://lazada.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}