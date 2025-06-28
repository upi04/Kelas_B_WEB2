<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

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

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::with('profile')->findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|min:3',
            'nim' => ['required', 'string', Rule::unique('mahasiswas')->ignore($mahasiswa->id)],
            'jurusan' => 'required|string',
            'alamat' => 'nullable|string',
            'no_hp' => 'required|string|min:10',
        ]);
        
        try {
            DB::transaction(function () use ($request, $mahasiswa) {
                $mahasiswa->update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'jurusan' => $request->jurusan,
                ]);

                $mahasiswa->profile()->updateOrCreate(
                    ['mahasiswa_id' => $mahasiswa->id],
                    [
                        'alamat' => $request->alamat,
                        'no_hp' => $request->no_hp,
                    ]
                );
            });
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal memperbarui data: ' . $th->getMessage());
        }

        return redirect('/mahasiswa')->with('success', 'Data berhasil diperbaharui');
    }
    
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect('/mahasiswa')->with('success', 'Data berhasil dipindahkan ke trash bin');
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

        return redirect('/mahasiswa/trash')->with('success', 'Data berhasil dipulihkan');
    }

    public function forceDelete($id)
    {
        $mahasiswa = Mahasiswa::onlyTrashed()->findOrFail($id);
        $mahasiswa->forceDelete();

        return redirect('/mahasiswa/trash')->with('success', 'Data berhasil dihapus permanen');
    }
}