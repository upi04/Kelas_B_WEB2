<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::with('profile')->get();
        return view('mahasiswa.index', compact('data'));
    }
    public function create()
    {
        return view('mahasiswa.create');
    }
    public function store(Request $r)
    {
        $r->validate([
            'nama' => 'required|min:3|max:255',
            'nim' => 'required|max:20|unique:mahasiswas',
            'alamat' => 'nullable|max:255',
            'no_hp' => 'nullable|min:10|max:20',
        ]);
        $mhs = Mahasiswa::create($r->only('nama', 'nim'));
        $mhs->profile()->create([
            'alamat' => $r->alamat ?? '',
            'no_hp' => $r->no_hp ?? '',
        ]);
        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $data = Mahasiswa::with('profile')->findOrFail($id);
        return view('mahasiswa.edit', compact('data'));
    }
    public function update(Request $r, $id)
    {
        $r->validate([
            'nama' => 'required|min:3|max:255',
            'nim' => 'required|max:20|unique:mahasiswas,nim,' . $id,
            'alamat' => 'required|max:255',
            'no_hp' => 'required|min:10|max:20',
        ]);
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->update($r->only('nama', 'nim'));
        $mhs->profile->update($r->only('alamat', 'no_hp'));

        return redirect('/mahasiswa')->with('success', 'Data berhasil diperbarui!');
    }
    public function destroy($id)
    {
        Mahasiswa::findOrFail($id)->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
    public function trash()
    {
        $data = Mahasiswa::onlyTrashed()->with('profile')->get();
        return view('mahasiswa.trash', compact('data'));
    }
    public function restore($id)
    {
        Mahasiswa::onlyTrashed()->findOrFail($id)->restore();
        return redirect('/mahasiswa')->with('success', 'Data berhasil dipulihkan!');
    }
    public function forceDelete($id)
    {
        Mahasiswa::onlyTrashed()->findOrFail($id)->forceDelete();
        return back()->with('success', 'Data dihapus permanen!');
    }
}