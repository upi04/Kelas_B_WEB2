<?php

namespace App\Http\Controllers;

class MessageController extends Controller
{
    public function biodata()
    {
        $data = [
            'name' => 'zul', 'email' => 'zulfikar@gmail.com', 'message' => 'Portofolio yang bagus',
        ];

        $judul = 'Pesan';
        return view('biodatadiri.biodata', compact('data', 'judul'));
    }
}
