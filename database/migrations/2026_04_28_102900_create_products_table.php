<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up(): void
    {
        // Ubah 'table' menjadi 'create'
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Jangan lupa tambahkan ID
            $table->string('name'); // Tambahkan kolom-kolom yang kamu perlukan
            $table->string('link_eksternal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
