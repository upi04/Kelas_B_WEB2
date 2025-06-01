<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message()
    {
        $message = $this->getBiodata();
        $link = $this->getLink();
        return view('lap3.message', compact('message', 'link'));
    }

    private function getBiodata()
    {
        return [
            'Message' => '"Setiap tantangan adalah peluang untuk tumbuh. Tetap fokus, tetap semangat, dan percaya bahwa kerja kerasmu akan membuahkan hasil terbaik. Kamu tidak sendiri—kita bergerak maju bersama!"',
        ];
    }
       private function getLink()
{
    return [
        'Home' => '<a href="/home">Home</a>',
        'Skill' => '<a href="/skill">Skill</a>',
        'Blog' => '<a href="/blog">Blog</a>',
    ];
}
}
