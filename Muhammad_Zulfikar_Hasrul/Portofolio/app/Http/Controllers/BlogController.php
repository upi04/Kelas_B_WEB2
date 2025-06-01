<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function biodata()
    {
        $data = [
            'email' => '<a href="mailto:60200123050@uin-alauddin.ac.id">Klik disini</a>',
            'youtube' => '<a href="https://www.youtube.com/@ZulForZ" target="_blank">Klik disini</a>',
            'instagram' => '<a href="https://www.instagram.com/zul_fikar_2105?igsh=MTN2YXJ5Z3J3bXh0dw==" target="_blank">Klik disini</a>',
        ];
        $judul = 'Sosial Media dan Aktivitas Blogging';
        return view('biodatadiri.biodata', compact('data', 'judul'));

    }
}
