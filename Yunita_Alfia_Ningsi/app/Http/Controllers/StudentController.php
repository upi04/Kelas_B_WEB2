<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Stringable;

class StudentController extends Controller{
    use HasFactory;

    public function index(){
        $student = student::all();
        return view("student.index",compact("student"));
    }
    
}