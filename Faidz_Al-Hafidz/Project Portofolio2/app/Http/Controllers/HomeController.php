<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function biodata()
    {
        
        $judul = 'Halaman Biodata';

        $data = [
            'Nama' => 'Faidz Al-Hafidz',
            'Tempat, Tanggal Lahir' => 'Pangkep, 13 Mei 2005',
            'Jenis Kelamin' => 'Laki-laki',
            'Alamat' => 'Pattallassang Kab.Gowa',
            'Email' => 'IjatKardus@gmail.com',
            'Telepon' => '081234567890',
            'Pendidikan' => 'S1 Teknik Informatika - Universitas Negeri Alauddin Makassar',
            'Hobi' => 'Dengar Musik, Main Game, Membaca, Olahraga',
            'Cita-cita' => 'Miliader Usia Muda',
            'Keahlian' => 'Html, Css, Javascript, Laravel',
            'Pengalaman Organisasi' => '-',
        ];
        return view('biodatadiri.biodata', compact('data', 'judul'));
    }
}
