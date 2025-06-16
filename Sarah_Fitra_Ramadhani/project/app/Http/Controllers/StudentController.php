<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class StudentController extends Controller{
    use HasFactory;

    public function index()
    {
        $students = Student::all(); // variabel harus $students
        return view("students.index", compact("students"));
    }
}