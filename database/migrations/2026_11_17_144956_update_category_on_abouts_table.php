<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            // Jika menggunakan enum, ubah kolom agar mencakup 'Biodata Singkat'
            // Atau jika menggunakan string, abaikan migration ini.
            $table->string('category')->change(); 
        });
    }

    public function down(): void
    {
        // 
    }
};