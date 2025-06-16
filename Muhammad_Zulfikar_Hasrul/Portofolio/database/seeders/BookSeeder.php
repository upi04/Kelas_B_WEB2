<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Framework Laravel',
            'author' => 'Taylor Otwell',
            'published_year' => 2022,
            'description' => 'Buku panduan praktis untuk membangun aplikasi web modern menggunakan Laravel.',
            'genre' => 'Web Programming',
            'stock' => 10
        ]);

        Book::create([
            'title' => 'Flutter Development',
            'author' => 'Chris Sells',
            'published_year' => 2021,
            'description' => 'Panduan lengkap membangun aplikasi Android dan iOS dengan Flutter dan Dart.',
            'genre' => 'Mobile Development',
            'stock' => 7
        ]);
    }
}

