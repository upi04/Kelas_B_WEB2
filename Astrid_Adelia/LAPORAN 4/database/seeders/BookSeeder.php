<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
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
