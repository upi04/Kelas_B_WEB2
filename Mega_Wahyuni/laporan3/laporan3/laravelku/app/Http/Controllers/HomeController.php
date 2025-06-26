<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $biodata = [
            'Nama' => 'Mega Wahyuni',
            'Tempat, Tanggal Lahir' => 'Biak, Papua, 19 Desember',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'Jl. Merdeka No. 123, Biak',
            'Email' => 'mega.wahyuni@example.com',
            'Telepon' => '0812-3456-7890',
            'Pendidikan' => 'S1 Informatika - Universitas Papua',
            'Hobi' => 'Membaca, Menulis, Traveling',
            'Cita-cita' => 'Menjadi Dosen',
            'Keahlian' => 'Web Development, UI/UX Design',
            'Pengalaman Organisasi' => 'Ketua Himpunan Mahasiswa Informatika 2022',
        ];

        return view('index', compact('biodata'));
    }
}
