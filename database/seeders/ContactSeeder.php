<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['nama_produk' => 'Youthera', 'kategori' => 'Skincare', 'deskripsi' => 'Produk skincare premium dari PT L\'Essential.', 'gambar' => 'default.jpg', 'link_eksternal' => 'https://tokopedia.com', 'created_at' => now(), 'updated_at' => now()],
            ['nama_produk' => 'Theraskin', 'kategori' => 'Skincare', 'deskripsi' => 'Produk perawatan kulit berstandar dokter.', 'gambar' => 'default.jpg', 'link_eksternal' => 'https://shopee.com', 'created_at' => now(), 'updated_at' => now()],
            ['nama_produk' => 'L\'Essential', 'kategori' => 'Kosmetik', 'deskripsi' => 'Kosmetik halal berstandar BPOM.', 'gambar' => 'default.jpg', 'link_eksternal' => 'https://lazada.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}