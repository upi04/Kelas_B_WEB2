<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
         Book::create([
            'title' => "Belajar Laravel untuk SD/Sederajat",
            'author' => "Dedy Mulyono",
            'published_year' => 2012,
            'genre' => 'Pendidikan',
            'stock' => 200,
            'description' => "Dijamin uang kembali jika anak anda tidak jago ",
        ]);
        

        // Student::create([
        //     'name' => 'Warda Khairah',
        //     'email' => 'khairahwarda@gmail.com',
        //     'birthday' => '2005-05-21',
        //     'major' => 'Teknik Informatika'
        // ]);

        // Student::create([
        //     'name' => 'Andi Nur Ainun Inriani.S',
        //     'email' => 'inriani@gmail.com',
        //     'birthday' => '2004-05-21',
        //     'major' => 'Teknik Informatika',
        // ]);

        // Student::create([
        //     'name' => 'Dhiwa Alief Caprillo',
        //     'email' => 'Dhiwa@gmail.com',
        //     'birthday' => '2004-09-30',
        //     'major' => 'Teknik Informatika'
        // ]);
    

    }
}
