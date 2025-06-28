<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create()
{
    return view('mahasiswa.create');
}

public function store(request $request)
{
    $request->validate([
        'nama' => 'required',
        'nim' => 'required'
    ]);

    mahasiswa::create($request->all());
    return redirect('/mahasiswa');
}

public function index()
{
    $mahasiswa = mahasiswa::all();
    return view('mahasiswa.index', compact('mahasiswa'));
}

public function edit($id){
    $mahasiswa = mahasiswa::findOrFail($id);
    return view ('mahasiswa.edit', compact('mahasiswa'));
}
public function update(Request $request, $id){
    $request->validate([
        'nama' => 'required',
        'nim' => 'required',
        'jurusan' => 'required',
    ]);

    $mahasiswa = mahasiswa::findorFail($id);
    $mahasiswa->update($request->all());

    return redirect( '/mahasiswa')->with('success', 'Data berhasil di update');
}
public function destory($id)
{
    $mahasiswa = mahasiswa::findOrFail($id);
    $mahasiswa->delete();

    return redirect('/mahasiswa')->with('success', 'value', 'Data berhasil dihapus');
}
}

