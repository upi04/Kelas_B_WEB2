<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohcontroller extends Controller
{
    Public function index()
    {

        $produk = ['neptop', 'Hp', 'ipad', 'Huawei'];
        return view('produk.index', compact('produk'));
    }

}