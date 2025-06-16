<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::create([
            'name' => 'Faidz Al-Hafidz',
            'email' => 'faidz@gmail.com',
            'birthdate' => '2005-05-13',
            'major' => 'Teknik Informatika',
        ]);

        Student::create([
            'name' => 'FahriMuhammad',
            'email' => 'alfahri@gmail.com',
            'birthdate' => '2005-03-18',
            'major' => 'PGSD',
        ]);

        Student::create([
            'name' => 'BrianAnanta',
            'email' => 'Bryn@gmail.com',
            'birthdate' => '2005-10-12',
            'major' => 'Sastra Jepang',
        ]);
    }
}
