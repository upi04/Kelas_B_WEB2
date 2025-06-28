<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        return view('blog');
    }

    public function skill()
    {
        return view('skill');
    }

    public function message()
    {
        return view('message');
    }

    public function biodata()
    {
        $biodata = [
            'nama' => 'Muh. Abdillah HM.',
            'tempat_tanggal_lahir' => 'Pangkep, 22 Juli 2005',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Fadeli Luran',
            'email' => 'abdillahhmm208@gmail.com',
            'telepon' => '088247603424',
            'pendidikan' => 'UIN Alauddin',
            'hobi' => 'Mendengarkan musik',
            'cita_cita' => 'Menjadi apapun',
            'keahlian' => 'Troubleshooting',
            'pengalaman_organisasi' => 'Osis, Pramuka'
        ];

        return view('biodata', compact('biodata'));
    }
}
