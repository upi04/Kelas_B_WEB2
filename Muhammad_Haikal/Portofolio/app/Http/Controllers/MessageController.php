<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function biodata()
    {
        $biodata = [
            'Nama' => 'Muhammad Haikal',
            'Pesan' => 'Terima kasih sudah mengunjungi halaman ini!',
            'Saran' => 'Terus belajar dan jangan mudah menyerah.',
            'Email' => 'Haikal@gmail.com',
        ];

        return view('biodata', ['biodata' => $biodata, 'judul' => 'Message']);
    }
}
