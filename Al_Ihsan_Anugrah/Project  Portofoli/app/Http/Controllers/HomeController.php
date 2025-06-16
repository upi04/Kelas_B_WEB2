<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function biodata()
    {
        $biodata = $this->getBiodata();
        return view('biodata.biodata', compact('biodata'));
    }

    private function getBiodata()
    {
        return [
            'Selamat datang' => 'Jangan Lupa makan',
        ];
    }
}
