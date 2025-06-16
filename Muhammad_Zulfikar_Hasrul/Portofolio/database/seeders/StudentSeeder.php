<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::create([
            'name' => 'Zulfikar',
            'email' => 'zulfikar@gmail.com',
            'birthdate' => '2005-01-02',
            'major' => 'Teknik Informatika',
        ]);

        Student::create([
            'name' => 'Alhamdy',
            'email' => 'alhamdy@gmail.com',
            'birthdate' => '2005-02-24',
            'major' => 'Teknik Arsitektur',
        ]);

        Student::create([
            'name' => 'Nabil',
            'email' => 'nabil@gmail.com',
            'birthdate' => '2005-10-24',
            'major' => 'Teknik Perencanaan Wilayah dan Kota',
        ]);
    }
}

