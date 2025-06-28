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
            'nim' => 'required|unique:mahasiswas'
        ]);

        $mahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
        ]);


        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    public function index() {
        $mahasiswas = Mahasiswa::all();
        // dd($mahasiswas);
        return view('mahasiswa.index', compact('mahasiswas'));
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
            'no_hp' => 'required|min:10',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
        ]);

        $mahasiswa->profile->update([
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('/mahasiswa')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus');
    }

    public function trash() {
        // dd('test');
        $mahasiswas = Mahasiswa::onlyTrashed()->get();
        return view('mahasiswa.trash', compact('mahasiswas'));
    }

    public function restore($id) {
        $mahasiswa = Mahasiswa::withTrashed()->findOrFail($id);
        $mahasiswa->restore();
        return redirect('/mahasiswa')->with('success', 'Data dikembalikan');
    }

    public function forceDelete($id) {
        $mahasiswa = Mahasiswa::withTrashed()->findOrFail($id);
        $mahasiswa->forceDelete();
        return redirect('/mahasiswa')->with('success', 'Data dihapus permanen');
    }
}