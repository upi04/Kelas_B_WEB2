<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function biodata()
    {
        $biodata = [
            'Nama' => 'Tasya Sahwasal Sabila',
            'Tempat, Tanggal Lahir' => 'Boronga, 05 Mei 2005',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'Boronga Desa Tinggimae Kec. Barombong Kab. Gowa',
            'Email' => 'salsabilasahwatasya@gmail.com',
            'Telepon' => '085256046xxx',
            'Pendidikan' => 'S1 Teknik Informatika - Universitas Islam Negeri Alauddin Makassar',
            'Hobi' => 'Membaca, Memasak, Nonton Film, Menggambar',
            'Cita-cita' => 'Software Engineer di xx',
            'Keahlian' => 'Laravel, Flutter, Python, C++',
            'Pengalaman Organisasi' => 'Pramuka',
            'Bahasa Pemrograman' => 'PHP, JavaScript, Python, C++',
            'Proyek Portofolio' => 'Web E-Commerce',
            'GitHub' => 'https://github.com/TasyaSahwasalSabila',
            'Instagram' => 'https://www.instagram.com/tsyashwaslsabila?igsh=dG13aHE3bm41eGR5&utm_source=qr',
        ];

        $foto = 'foto_biodata.jpg'; 

        return view('biodata', compact('biodata', 'foto'));
    }

}
