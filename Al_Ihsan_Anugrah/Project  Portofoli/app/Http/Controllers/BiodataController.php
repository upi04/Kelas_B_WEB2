<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodata()
    {
        $biodata = [
            'Nama' => 'Al Ishan Anugrah',
            'Tempat, Tanggal Lahir' => 'Siwa, 20 Juli 2005',
            'Jenis Kelamin' => 'Laki-laki',
            'Alamat' => 'Samata, Kab. Gowa',
            'Email' => 'alishananugrah@gmail.com',
            'Telepon' => '081345464428',
            'Pendidikan' => 'Teknik Informatika - UIN Alauddin Makassar',
            'Hobi' => 'Makan, Tidur, Menghayal',
            'Cita-cita' => 'Menjadi Ultramen',
            'Keahlian' => 'Mendaki Bukit Lewati Lembah',
            'Pengalaman Organisasi' => 'Tidak ada',
        ];

        return view('biodata.biodata', compact('biodata'));
    }
}