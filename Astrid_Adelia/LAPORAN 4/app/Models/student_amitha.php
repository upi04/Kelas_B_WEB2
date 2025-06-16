<?php

namespace Database\Seeders;
use App\Models\student_amitha; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabel_amitha extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tabel_amitha::create([
            'nama' => 'Amitha Wahdini',
            'email' => 'amithamangenda@gmail.com',
           'age '=> 21,
        ]);
        
       
      }
    
    
    }