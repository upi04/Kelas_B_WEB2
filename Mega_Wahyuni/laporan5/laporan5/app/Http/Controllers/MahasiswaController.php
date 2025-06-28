<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create()
{
    return view('mahasiswa.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'nim' => 'required'
    ]);

    Mahasiswa::create($request->all());
    return redirect('/mahasiswa');
}

public function index()
{
    $mahasiswa = Mahasiswa::all();
    return view('mahasiswa.index', compact('mahasiswa'));
}

}