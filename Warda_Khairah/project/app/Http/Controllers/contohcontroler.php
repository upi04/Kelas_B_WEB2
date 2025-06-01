<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohcontroler extends Controller
{
    public function index()
    {
        $produk = ['laptop', 'hp', 'ipad', 'huaewi'];
        return view('produk.index', compact('produk'));
    } //
}



