<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function biodata()
    {
        $biodata = $this->getBiodata();
        return view('biodata', compact('biodata'));
    }

    private function getBiodata()
    {
        return [
            'nama' => 'Nur Faiqatunnisa',
            'ttl' => 'Sinjai, 10 Januari 2003',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Jl. Persatuan, Sinjai Utara',
            'email' => 'faiqatunnisa@example.com',
            'telepon' => '081234567890',
            'pendidikan' => 'S1 Sistem Informasi - Universitas Negeri Makassar',
            'hobi' => 'Membaca, Menulis, Desain Grafis',
            'cita_cita' => 'Data Analyst',
            'keahlian' => 'PHP, Laravel, MySQL, Canva',
            'pengalaman_organisasi' => 'Ketua OSIS, Anggota BEM Fakultas'
        ];
    }
}

