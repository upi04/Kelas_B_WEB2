<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohcontroller extends Controller
{
   public function index()
{
    $produk = ['Laptop', 'hp', 'ipad', 'huawei'];
    return view('produk.index', compact('produk'));
}

}
