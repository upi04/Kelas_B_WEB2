<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student_tisa extends Model
{
    protected $table = 'student_tisa';
    protected $fillable = ['name','email','age'];
}
