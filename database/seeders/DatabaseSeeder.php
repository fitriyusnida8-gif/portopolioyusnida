<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan baris ini ada jika belum di-import

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat akun admin tiruan secara instan
        User::create([
            'name'     => 'Fitri Yusnida',
            'email'    => 'fitri@gmail.com',         // Ini email untuk login kamu nanti
            'password' => bcrypt('yusnida'),     // Ini password login kamu (yusnida)
        ]);
    }
}