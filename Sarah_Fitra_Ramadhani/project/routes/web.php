<<<<<<< HEAD
<?php
=======
s<?php
>>>>>>> dbfa4438fc3785e0289c9bd1fbe422bc1fec32e4

use App\Http\Controllers\biodataController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/biodata', [biodataController::class, 'show']);
=======
>>>>>>> dbfa4438fc3785e0289c9bd1fbe422bc1fec32e4
// Route::get('/biodata', [biodataController::class, 'show']);

Route::controller(viewController::class)->group(function(){
    Route::get('/','about');
    Route::get('/about','about');
    Route::get('/contact','contact');
    Route::get('/projects','projects');
    Route::get('/skills','skills');
});