<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function __construct()
    {

    }

    
    public function index()
    {
        $title = 'Halaman Beranda';
        $deskripsi = 'Biodata Diri';
        $fitur = [
            'Nama' => 'Tsabitha jahra ',
            'Tempat, Tanggal Lahir' => 'Tambangan, 20 Maret 2005',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'Romang Lompoa, Bontomarannu',
            'Agama'=> 'islam',
            'Email' => 'fikatsabithajahra@gmail.com',
            'Telepon' => '085342675279',
            'Pendidikan' => 'S1 Teknik Informatika',
            'Hobi' => 'Badminton',
            'Cita Cita' => 'Menjadi orang sukses',
            'Keahlian' => 'Menyanyi',
            'Pengalaman organisasi' => 'Palang Merah Indonesia',
            'Makanan favorit' =>'mie',
            'Minuman favorit' =>'Jus alpukat',
        ];

        return view('dashboard', compact('title', 'deskripsi', 'fitur'));
    }
}
