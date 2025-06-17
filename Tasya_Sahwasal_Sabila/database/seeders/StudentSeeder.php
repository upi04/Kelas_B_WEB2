<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'Tisaaa',
            'email' => 'tisaa@gmail.com',
            'birthdate' => '2005-05-05',
            'major' => 'Teknik Informatika'
        ]);
    }
}
