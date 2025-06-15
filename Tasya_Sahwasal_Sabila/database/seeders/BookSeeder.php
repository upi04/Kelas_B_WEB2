<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Laravel Dasar',
            'author' => 'Tasya',
            'published_year' => 2024,
            'description' => 'Panduan belajar Laravel dari awal',
            'genre' => 'Teknologi',
            'stock' => 5
        ]);
    }
}
