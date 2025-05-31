<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function projects(){
        return view('projects');
    }
    public function skills(){
        return view('skills');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> dbfa4438fc3785e0289c9bd1fbe422bc1fec32e4
