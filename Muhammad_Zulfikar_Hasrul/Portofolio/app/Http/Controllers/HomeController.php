<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function biodata()
    {
        
        $judul = 'Halaman Biodata';

        $data = [
            'nama' => 'Muhammad Zulfikar Hasrul',
            'ttl' => 'Sungguminasa, 2 Januari 2005',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'BTN Andi Tonro Permai - Gowa',
            'email' => '60200123050@uin-alauddin.ac.id',
            'telepon' => '089518800677',
            'pendidikan' => 'Mahasiswa',
            'hobi' => 'Main Game dan Rebahan',
            'cita_cita' => 'Sebaik baik manusia yang bermanfaat bagi orang lain',
            'keahlian' => '-',
            'pengalaman_organisasi' => '-'
        ];
        return view('biodatadiri.biodata', compact('data', 'judul'));
    }
}

