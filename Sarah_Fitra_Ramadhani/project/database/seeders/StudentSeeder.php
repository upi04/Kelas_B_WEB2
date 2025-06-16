<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Student::create([
            'name' => 'Sarah Fitra Ramadhani',
            'email' => 'sarahfitraramadhani3010@gmail.com',
            'birthday' => '2005-10-30',
            'major' => 'Teknik Informatika'
        ]);

        Student::create([
            'name' => 'Nur Aisyah S',
            'email' => 'NurAisyahS@gmail.com',
            'birthday' => '2005-01-20',
            'major' => 'Teknik Informatika'
        ]);

        Student::create([
            'name' => 'Tsabitha Jahra',
            'email' => 'TsabithaFika@gmail.com',
            'birthday' => '2005-03-28',
            'major' => 'Teknik Informatika'
        ]);
    }
}
