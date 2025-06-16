<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'birthdate' => 'required|date',
            'major' => 'required|string',
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'birthdate' => $request->birthdate,
            'Jurusan' => $request->major, // ⚠️ sesuaikan nama kolom di DB!
        ]);

        return redirect()->route('students.index')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }
}
