<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nita extends Model
{
    public function run(): void
    {
        nita::create([
            'nama' => 'nita',
            'email' => 'nita@gmail.com',
            'age' => '90',
        ]);
    }
    protected $fillable = ['name', 'email', 'age'];
}
