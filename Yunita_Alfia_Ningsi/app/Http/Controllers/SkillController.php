<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skill()
    {
        $skill = $this->getBiodata();
        $link = $this->getLink();
        return view('lap3.skill', compact('skill', 'link'));
    }

    private function getBiodata()
    {
        return [
            'Skill' => 'HTML, Laravel, PHP',
        ];
    }
      private function getLink()
{
    return [
        'Home' => '<a href="/home">Home</a>',
        'Blog' => '<a href="/blog">Blog</a>',
        'Message' => '<a href="/message">Message</a>',
    ];
}
}
