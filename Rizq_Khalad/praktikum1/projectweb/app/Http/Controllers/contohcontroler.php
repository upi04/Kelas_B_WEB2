<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohcontroler extends Controller
{
    public function index()
    {
        $yamaha = ['xride', 'mio sporty', 'fizr', '125zr'];
        return view('produk.index', compact('yamaha'));
    } //
}
