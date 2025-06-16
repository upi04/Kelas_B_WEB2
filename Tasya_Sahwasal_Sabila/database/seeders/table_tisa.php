<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tisa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tisa::create([
            'name'=>'Tasya Sahwasal Sabila',
            'email'=>'tisa555@gmail.com',
            'age'=>20,
        ]);
        tisa::create([
            'name'=>'Park jimin',
            'email'=>'parkjimin@gmail.com',
            'age'=>25,
        ]);
        tisa::create([
            'name'=>'Kim seokjin',
            'email'=>'kimseokjin@gmail.com',
            'age'=>26,
        ]);
    }
}