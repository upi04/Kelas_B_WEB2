<<<<<<< HEAD
<?php
=======
<<<<<<< HEAD
<?php
=======
s<?php
>>>>>>> dbfa4438fc3785e0289c9bd1fbe422bc1fec32e4
>>>>>>> 3b4b535672b440e20722381692d9b02938771a80

use App\Http\Controllers\biodataController;
use App\Http\Controllers\contohcontroller;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;

<<<<<<< HEAD

Route::get('/biodata', [biodataController::class, 'show']);
Route::get('/biodata/pribadi', [HomeController::class, 'index']);
=======
<<<<<<< HEAD
Route::get('/biodata', [biodataController::class, 'show']);
=======
>>>>>>> dbfa4438fc3785e0289c9bd1fbe422bc1fec32e4
// Route::get('/biodata', [biodataController::class, 'show']);
>>>>>>> 3b4b535672b440e20722381692d9b02938771a80

Route::controller(viewController::class)->group(function(){
    Route::get('/','about');
    Route::get('/about','about');
    Route::get('/contact','contact');
    Route::get('/projects','projects');
    Route::get('/skills','skills');
});

Route::get('/produk',[contohcontroller::class,'index']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);

Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/{id}', [SkillController::class, 'show']);

Route::get('/messages', [MessageController::class, 'index']);
Route::get('/messages/{id}', [MessageController::class, 'show']);

