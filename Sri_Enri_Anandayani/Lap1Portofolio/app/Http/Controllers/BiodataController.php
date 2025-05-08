<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
    $namaLengkap = "Sri Enri Anandayani";
        $nim = "60200123065";

        return $namaLengkap . ", dengan " . $nim;
    }
}
