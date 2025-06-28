<?php

namespace Database\Seeders;
use App\Models\Student;




use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class student_wawan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        student::create([
            'nama' => 'Munawar',
            'email' => 'munawar@gmail.com',
            'age' => '21',
        ]);
        student::create([
            'nama' => 'Xenn',
            'email' => 'munawarwawan@gmail.com',
            'age' => '25',
        ]);
    }
}
