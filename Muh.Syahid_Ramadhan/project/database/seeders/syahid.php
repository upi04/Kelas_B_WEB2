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
            'name'=>'Mu. Syahid Ramadhan',
            'email'=>'syahidradmadhan55@gmail.com',
            'age'=>'19',
        ]);
        
        student_sarah::create([
            'name'=>'aspi',
            'email'=>'aspi46@gmail.com',
            'age'=>'20',
        ]);

        student_sarah::create([
            'name'=>'arif',
            'email'=>'noozygank@gmail.com',
            'age'=>'20',
        ]);
    }
}
