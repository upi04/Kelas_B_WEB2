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
            'name' => 'Warda Khairah',
            'email' => 'khairahwarda@gmail.com',
            'birthday' => '2005-05-21',
            'major' => 'Teknik Informatika'
        ]);

        Student::create([
            'name' => 'Andi Nur Ainun Inriani.S',
            'email' => 'inriani@gmail.com',
            'birthday' => '2004-05-21',
            'major' => 'Teknik Informatika'
        ]);
    }
}