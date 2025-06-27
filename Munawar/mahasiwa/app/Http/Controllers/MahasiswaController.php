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

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|min:3',
        'nim' => 'required|unique:mahasiswas,nim',
        'jurusan' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required|min:10'
    ]);

    $mahasiswa = Mahasiswa::create([
        'nama' => $request->nama,
        'nim' => $request->nim,
        'jurusan' => $request->jurusan,
    ]);

    $mahasiswa->profile()->create([
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
    ]);

    return redirect('/mahasiswa');
}


public function index()
{
    $mahasiswa = mahasiswa::all();
    return view('mahasiswa.index', compact('mahasiswa'));
}

public function edit($id)
{
    $mahasiswa = Mahasiswa::with('profile')->findOrFail($id);
    return view('mahasiswa.edit', compact('mahasiswa'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|min:3',
        'nim' => 'required|unique:mahasiswas,nim,' . $id,
        'jurusan' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required|min:10'
    ]);

    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->update([
        'nama' => $request->nama,
        'nim' => $request->nim,
        'jurusan' => $request->jurusan
    ]);

    $mahasiswa->profile()->update([
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp
    ]);

    return redirect('/mahasiswa');
}



public function destroy($id)
{
    $mahasiswa = mahasiswa::findOrFail( $id );
    $mahasiswa->delete();

    return redirect('mahasiswa')->with('success','Data berhasil dihapus');
}

// Menampilkan data yang sudah dihapus (trash)
public function trash()
{
    $mahasiswa = Mahasiswa::onlyTrashed()->get();
    return view('mahasiswa.trash', compact('mahasiswa'));
}

// Mengembalikan data yang dihapus
public function restore($id)
{
    $mahasiswa = Mahasiswa::onlyTrashed()->findOrFail($id);
    $mahasiswa->restore();
    return redirect()->route('mahasiswa.trash')->with('success', 'Data berhasil dikembalikan.');
}

// Menghapus permanen data mahasiswa
public function forceDelete($id)
{
    $mahasiswa = Mahasiswa::onlyTrashed()->findOrFail($id);
    $mahasiswa->forceDelete();
    return redirect()->route('mahasiswa.trash')->with('success', 'Data dihapus permanen.');
}


}