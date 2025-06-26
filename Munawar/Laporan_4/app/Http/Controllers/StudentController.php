<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    // Tampilkan semua data student dari database
    public function index()
    {
        $students = Student::all();
        return view('students.student', compact('students'));
    }
}
