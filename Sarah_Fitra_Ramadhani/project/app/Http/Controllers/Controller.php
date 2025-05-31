<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
abstract class Controller
{
    //
}
=======
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
>>>>>>> dbfa4438fc3785e0289c9bd1fbe422bc1fec32e4
