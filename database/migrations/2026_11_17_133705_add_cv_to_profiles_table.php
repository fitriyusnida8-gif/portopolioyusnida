<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Cek apakah tabel profiles sudah ada atau belum
        if (!Schema::hasTable('profiles')) {
            Schema::create('profiles', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('class_name')->nullable();
                $table->string('major')->nullable();
                $table->text('description')->nullable();
                $table->string('skill_badge')->nullable();
                $table->string('image')->nullable();
                $table->string('cv_file')->nullable(); // Langsung buat kolom cv_file jika tabel baru dibuat
                $table->timestamps();
            });
        } else {
            // Jika tabel sudah ada, pastikan kolom cv_file belum ada sebelum ditambahkan
            Schema::table('profiles', function (Blueprint $table) {
                if (!Schema::hasColumn('profiles', 'cv_file')) {
                    $table->string('cv_file')->nullable()->after('id');
                }
            });
        }
    }

    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            if (Schema::hasColumn('profiles', 'cv_file')) {
                $table->dropColumn('cv_file');
            }
        });
    }
};