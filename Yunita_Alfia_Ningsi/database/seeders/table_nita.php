<?php

namespace Database\Seeders;
use App\Models\nita;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class nita extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        nita::create([
            'name'=>'Yunita Alfia Ningsi',
            'email'=>'ns266231@gmail.com',
            'age'=>20,
        ]);
    }
}
