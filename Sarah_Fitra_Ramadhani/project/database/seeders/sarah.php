<?php

namespace Database\Seeders;
use app\Models\student_sarah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sarah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        student_sarah::create([
            'name'=>'Sarah Fitra Ramadhani',
            'email'=>'sarahfitraramadhani3010@gmail.com',
            'age'=>'19',
        ]);
        
        student_sarah::create([
            'name'=>'ica',
            'email'=>'icajelek@gmail.com',
            'age'=>'20',
        ]);

        student_sarah::create([
            'name'=>'fika',
            'email'=>'fikacuu@gmail.com',
            'age'=>'20',
        ]);
    }
}
