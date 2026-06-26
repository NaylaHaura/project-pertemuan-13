<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            ['nama_layanan' => 'Konsultasi', 'deskripsi' => 'Layanan konsultasi profesional untuk kebutuhan bisnis Anda.', 'created_at' => now(), 'updated_at' => now()],
            ['nama_layanan' => 'Pengiriman', 'deskripsi' => 'Layanan pengiriman cepat dan aman ke seluruh Indonesia.', 'created_at' => now(), 'updated_at' => now()],
            ['nama_layanan' => 'Pemasangan', 'deskripsi' => 'Layanan pemasangan produk oleh teknisi berpengalaman.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}