<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function showMyBiodata()
    {
        $dataBiodata = [
            'nama' => 'Nurul Fajrin Ramadhani',
            'tempat_tanggal_lahir' => 'Palopo 20 Oktober 2005',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Samata',
            'email' => 'nurulfajrinramadhani14@gmail.com',
            'telepon' => '082192375934',
            'pendidikan' => 'S1 Teknik Informatika - UIN Alauddin Makassar',
            'hobi' => 'Memasak',
            'cita_cita' => 'Fullstack Developer Profesional',
        ];

        return view('biodata_saya', ['biodata' => $dataBiodata]);
    }

    public function showTeamBiodata()
    {
        $anggotaTim = [
            [
                'nama' => 'Andi Wijaya',
                'tempat_tanggal_lahir' => 'Surabaya, 10 April 1999',
                'jenis_kelamin' => 'Laki-laki',
                'pendidikan' => 'S1 Sistem Informasi',
                'keahlian' => 'Data Analysis, Python, SQL',
                'posisi' => 'Data Analyst'
            ],
            [
                'nama' => 'Siti Aminah',
                'tempat_tanggal_lahir' => 'Yogyakarta, 22 Juli 2000',
                'jenis_kelamin' => 'Perempuan',
                'pendidikan' => 'S1 Desain Komunikasi Visual',
                'keahlian' => 'UI/UX Design, Figma, Adobe XD',
                'posisi' => 'UI/UX Designer'
            ],
            [
                'nama' => 'Rina Fitriani',
                'tempat_tanggal_lahir' => 'Medan, 5 November 1998',
                'jenis_kelamin' => 'Perempuan',
                'pendidikan' => 'S1 Teknik Komputer',
                'keahlian' => 'Network Admin, Linux, Cyber Security',
                'posisi' => 'Network Engineer'
            ]
        ];

        // Menggunakan compact() untuk meneruskan variabel ke view
        // 'anggotaTim' di sini akan menjadi variabel $anggotaTim di view
        return view('biodata_tim', compact('anggotaTim'));
    }

   
    public function showContactInfo()
    {
        return view('contact_info', [
            'perusahaan' => 'PT. Inovasi Digital',
            'alamat_kantor' => 'Jl. Digital Kreatif No. 45, Jakarta',
            'telepon_kantor' => '(021) 1234-5678',
            'email_kantor' => 'info@inovasidigital.co.id',
            'jam_kerja' => 'Senin-Jumat, 09.00 - 17.00 WIB'
        ]);
    }

    /**
     * Method 4: showProjectSummary - Mengirim data dengan helper 'with()'
     * Ini adalah cara lain yang sangat umum untuk meneruskan data ke view.
     * Biasanya dipakai jika Anda punya banyak data dan ingin chaining.
     */
    public function showProjectSummary()
    {
        $projectTitle = "Pengembangan Sistem Informasi Kampus";
        $startDate = "2024-01-15";
        $endDate = "2024-06-30";
        $status = "Sedang Berlangsung";
        $teamSize = 5;
        $description = "Proyek ini bertujuan untuk mengembangkan sistem informasi terpadu untuk kebutuhan 
        administrasi akademik, kemahasiswaan, dan kepegawaian kampus.";

        return view('project_summary')
                    ->with('title', $projectTitle)
                    ->with('start', $startDate)
                    ->with('end', $endDate)
                    ->with('status', $status)
                    ->with('size', $teamSize)
                    ->with('desc', $description);
    }
}