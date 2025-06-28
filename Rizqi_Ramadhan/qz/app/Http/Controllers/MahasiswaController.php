<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'nim' => 'required|unique:mahasiswas',
            'jurusan' => 'required',
        ]);

        $mahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
        ]);

        $mahasiswa->profile()->create([
            'alamat' => '-',
            'no_hp' => '-',
        ]);

        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan');
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
            'jurusan' => $request->jurusan,
        ]);

        $mahasiswa->profile()->updateOrCreate(
            ['mahasiswa_id' => $mahasiswa->id],
            ['alamat' => $request->alamat, 'no_hp' => $request->no_hp]
        );

        return redirect('/mahasiswa')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus');
    }

    public function trash()
    {
        $mahasiswa = Mahasiswa::onlyTrashed()->get();
        return view('mahasiswa.trash', compact('mahasiswa'));
    }

    public function restore($id)
    {
        $mahasiswa = Mahasiswa::onlyTrashed()->findOrFail($id);
        $mahasiswa->restore();
        return redirect('/mahasiswa/trash')->with('success', 'Data berhasil dikembalikan');
    }

    public function forceDelete($id)
    {
        $mahasiswa = Mahasiswa::onlyTrashed()->findOrFail($id);
        $mahasiswa->forceDelete();
        return redirect('/mahasiswa/trash')->with('success', 'Data dihapus permanen');
    }
}
//