<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil semua seeder yang kamu perlukan di sini
        $this->call([
            BookSeeder::class,
            StudentSeeder::class,
            // Tambahkan seeder lain di sini kalau ada
        ]);
    }
}