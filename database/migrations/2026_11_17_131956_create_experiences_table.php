<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('period'); // Untuk bulan/tahun (Contoh: Januari - Maret 2025)
            $table->string('title');  // Untuk judul pengalaman
            $table->text('description'); // Untuk deskripsi
            $table->string('image')->nullable(); // Simpan nama file gambar
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};