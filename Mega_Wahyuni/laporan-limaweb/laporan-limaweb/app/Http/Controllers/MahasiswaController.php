<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\App;

 


class MahasiswaController extends Controller
{

public function index()
{
    $mahasiswas = Mahasiswa::all();
    return view('mahasiswa.index', compact('mahasiswas'));
}

public function create()
{
    return view('mahasiswa.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nim' => 'required|string|unique:mahasiswas,nim',
        'jurusan' => 'required|string|max:100',
    ]);

    Mahasiswa::create($validated);

    return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
}

public function edit($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);
    return view('mahasiswa.edit', compact('mahasiswa'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nim' => 'required|string|max:20',
        'jurusan' => 'required|string|max:100',
    ]);

    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->update($validated);

    return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
}

public function destroy($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->delete();

    return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
}

}
