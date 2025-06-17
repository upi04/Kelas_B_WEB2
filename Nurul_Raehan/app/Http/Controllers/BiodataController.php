<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodata()
    {
        $biodata = [
            'nama' => 'Nurul Raehan',
            'ttl' => 'Makassar, 12 September 2005',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Jl. Sukaria No. 41, Makassar',
            'email' => 'nurulraehan09@gmail.com',
            'telepon' => '081234567890',
            'pendidikan' => 'Mahasiswa Teknik Informatika - Universitas UIN',
            'hobi' => 'Membaca, Menulis, Coding',
            'cita_cita' => 'Software Engineer di Google',
            'keahlian' => 'Memasak, Laravel, UI/UX Design',
            'pengalaman_organisasi' => 'OSIS, Panitia Seminar Nasional'
        ];

        return view('biodata', compact('biodata'));
    }
}
