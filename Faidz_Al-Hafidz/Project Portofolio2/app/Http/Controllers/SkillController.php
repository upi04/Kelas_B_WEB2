<?php

namespace App\Http\Controllers;

class SkillController extends Controller
{
    public function biodata()
    {
        $data = [
            'skill' => 'On Going',
        ];

        $judul = 'Skill';
        return view('biodatadiri.biodata', compact('data', 'judul'));
    }
}