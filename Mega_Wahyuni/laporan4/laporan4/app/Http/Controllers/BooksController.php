<?php

namespace App\Http\Controllers;
use App\Models\book;
use App\Models\Student;


use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index() {
        $books = book::all();
        $students = Student::all(); // ambil semua data dari tabel students
        return view('welcome', compact('books', 'students'));
    }
}
