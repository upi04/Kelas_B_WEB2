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
            'nama' => 'Rizqi Ramadhan',
            'tempat_tanggal_lahir' => 'Bone, 28 September 2005',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'SAMATA',
            'email' => 'rizqiramadhan@gmail.com',
            'telepon' => '08123456784',
            'pendidikan' => 'UIN Alauddin',
            'hobi' => 'Mendengarkan musik',
            'cita_cita' => 'kaya',
            'keahlian' => 'turu di bawah jam 8',
            'pengalaman_organisasi' => 'Paskibra, MPK'
        ];

        return view('biodata', compact('biodata'));
    }
}