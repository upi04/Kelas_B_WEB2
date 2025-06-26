<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function biodata()
    {
        $biodata = $this->getBiodata();
        return view('biodata.biodata', compact('biodata'));
    }

    private function getBiodata()
    {
        return [
            'Nama' => 'Al Ishan Anugrah',
            'Tempat, Tanggal Lahir' => 'Siwa, 20 Juli 2005',
            'Jenis Kelamin' => 'Laki-laki',
            'Alamat' => 'Samata, Kab. Gowa',
            'Email' => 'alishananugrah@gmail.com',
            'Telepon' => '081345464428',
            'Pendidikan' => 'Teknik Informatika - UIN Alauddin Makassar',
            'Hobi' => 'Tidur, Makan, Membaca',
            'Cita-cita' => 'Ultraman',
            'Keahlian' => 'Naik Gunung Lewati Lembah',
            'Pengalaman Organisasi' => 'Tidak ada',
        ];
    }
}
