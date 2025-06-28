<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use PDO;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }
    public function create()
    {
        return view('mahasiswa.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|unique:mahasiswas,nim|max:11',
        ]);
        Mahasiswa::create([
            'name' => $request->name,
            'nim' => $request->nim,
        ]);
        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan');
    }
}