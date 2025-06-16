<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;


class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       student::create([
        'name' => 'Indri Comel',
        'email' => 'indri@gmail.com',
        'birthdate' => '2006-03-10',
        'major' => 'Teknik Informatika',
        ]);

        student::create([
            'name'=> 'Inuls',
            'email'=> 'inuls@gmail.com',
            'birthdate'=> '2004-01-08',
            'major'=> 'Teknik Informatika',
        ]);

        student::create([
            'name'=> 'Wandol',
            'email'=> 'iwandol@gmail.com',
            'birthdate'=> '2004-01-10',
            'major'=> 'Teknik Informatika',
        ]);
    } 
}
