<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function biodata()
    {
        $biodata = $this->getBiodata();
        return view('biodata.biodata', compact('biodata'));
    }

    private function getBiodata()
    {
        return [
            'Keahlian' => 'Naik Gunung Lewati Lembah',
            'Pengalaman Organisasi' => 'Tidak ada',
        ];
    }
}
