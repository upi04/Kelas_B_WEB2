<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RizqiModel;

class TableRizqi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RizqiModel::create([
            'name' => 'Rizqi Ramadhan',
            'email' => 'rizqiramadhan1234@gmail.com',
            'age' => 19,
        ]);
    }
}
