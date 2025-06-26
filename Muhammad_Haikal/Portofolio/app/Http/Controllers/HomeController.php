<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function biodata()
    {
        $biodata = [
            'Nama' => 'Muhammad Haikal',
            'Tempat, Tanggal Lahir' => 'Enrekang, 7 juni 2004',
            'Jenis Kelamin' => 'Laki-laki',
            'Alamat' => 'Landokadawang kec Enrekang',
            'Email' => 'Haikal@gmail.com',
            'Telepon' => '082155217480',
            'Pendidikan' => 'S1 Teknik Informatika - Universitas Islam Negeri Alauddin Makassar',
            'Hobi' => 'Membaca, Coding, Traveling',
            'Cita-cita' => 'Software Engineer di Google',
            'Keahlian' => 'html, css, javascript, php, laravel',
            'Pengalaman Organisasi' => 'Anggota Biasa Organda Enrekang',
        ];

        return view('biodata', ['biodata' => $biodata, 'judul' => 'Home']);
    }
}
