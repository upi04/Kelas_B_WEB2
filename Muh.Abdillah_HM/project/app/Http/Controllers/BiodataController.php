<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $namaLengkap = "Muh. Abdillah HM.";
        $nim = "60200123040";

        return $namaLengkap . ", dengan " . $nim;
    }
}
