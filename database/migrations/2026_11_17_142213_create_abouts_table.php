<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['Pendidikan', 'Minat & Karir', 'Pengalaman PKL', 'Cita-cita']);
            $table->string('title'); // Nama Pendidikan / Posisi / Bidang Karir / Cita-cita
            $table->string('year')->nullable(); // Tahun atau Periode
            $table->text('description')->nullable(); // Keterangan tambahan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};