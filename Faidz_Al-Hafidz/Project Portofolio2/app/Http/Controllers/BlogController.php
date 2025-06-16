<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function biodata()
    {
        $data = [
             'title' => 'Portofolio',
                'date' => '2025-06-02',
                'author' => 'Faidz Al-Hafidz',
                'content' => 'Ini adalah portofolio sederhana'
        ];
        $judul = 'Sosial Media dan Aktivitas Blogging';
        return view('biodatadiri.biodata', compact('data', 'judul'));

    }
}