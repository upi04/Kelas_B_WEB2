<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Harry Potter and the Philosopher',
            'author' => 'J.K. Rowling',
            'published_year' => 1997,
            'description' => 'Seorang anak yatim piatu bernama Harry Potter menemukan bahwa dia adalah seorang penyihir dan diundang untuk belajar di sekolah sihir Hogwarts.',
            'genre' => 'Fantasi, Petualangan',
            'stock' => 10
        ]);

        Book::create([
            'title' => 'The Diary of a Young Girl',
            'author' => 'Anne Frank',
            'published_year' => 1947,
            'description' => 'Catatan harian remaja Yahudi yang bersembunyi dari kejaran Nazi selama Perang Dunia II.',
            'genre' => 'Biografi, Sejarah',
            'stock' => 7
        ]);

        Book::create([
            'title' => 'The Da Vinci Code',
            'author' => 'Dan Brown',
            'published_year' => 2003,
            'description' => 'Robert Langdon harus memecahkan misteri simbol dan sejarah tersembunyi dalam karya seni Leonardo da Vinci.',
            'genre' => 'Thriller, Misteri',
            'stock' => 5
        ]);
    }
}
