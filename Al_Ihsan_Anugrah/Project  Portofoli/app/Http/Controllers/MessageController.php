<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function biodata()
    {
        $biodata = $this->getBiodata();
        return view('biodata.biodata', compact('biodata'));
    }

    private function getBiodata()
    {
        return [
            'Hobi' => 'Tidur, Makan, Membaca',
            'Cita-cita' => 'Ultraman',
        ];
    }
}
