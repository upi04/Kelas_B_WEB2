<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; // Import model Book

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Belajar Laravel',
            'author' => 'Amitha Wahdini',
            'published_year' => 2024,
            'description' => 'Panduan lengkap belajar Laravel dari nol',
            'genre' => 'Teknologi',
            'stock' => 10
        ]);
    }
}
