<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        // Data biodata lengkapmu
        $biodata = [
            'nama'                  => 'Muh. Yusuf Ris Kilkoda',
            'tempat_tanggal_lahir'  => 'Kilkoda, 16 February 2005',
            'jenis_kelamin'         => 'Laki-laki',
            'alamat'                => 'Ko-bang',
            'email'                 => 'yusufkilkoda710@gamil.com',
            'telepon'               => '087865258053',
            'pendidikan'            => [
                'SD' => 'SD Negeri Kilkoda',
                'SMP' => 'SMP Negeri Seram Bagian Timur',
                'SMK' => 'SMK Sumba Opu',
                'Kuliah' => 'Universitas Islam Alauddin Makassar'
            ],
            'hobi'                  => ['Membaca buku', 'Game', 'Sepak Bola','Macing'],
            'cita_cita'             => 'Menjadi BacKand Developer yang handal dan Bermanfaat',
            'keahlian'              => ['Masih Terpendam'],
            'pengalaman_organisasi' => [
                '-',

            ],
            'bahasa_asing'          => ['-'],
            'penghargaan'           => ['-'],
        
        ];

        // Mengirim data biodata ke view
        return view('biodata.index', compact('biodata'));
    }
}