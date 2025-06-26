<?php

namespace Database\Seeders;

use App\Models\Human;
use App\Models\Humans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class humanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        human::create([
            'name' => 'Munawar',
            'email' => 'munwawar@gmail.com',
            'birthdate' => '2004-01-20',
            'major' => 'Teknik Informatika',
        ]);

        human::create([
            'name' => 'ultramen',
            'email' => 'ultramen@gmail.com',
            'birthdate' => '2003-01-23',
            'major' => 'Kapten Bumi',
        ]);
        human::create([
            'name' => 'badut',
            'email' => 'badut@gmail.com',
            'birthdate' => '2000-04-17',
            'major' => 'mainanmu',
        ]);
    }
}
