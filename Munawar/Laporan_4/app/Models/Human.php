<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    protected $table = 'humans';

    protected $fillable =['name', 'email', 'birthdate', 'major'];
}
