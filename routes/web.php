<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


// Route::get('/comics', function () {
//     $comicsFile = public_path('comics.php');
//     if (File::exists($comicsFile)) {
//         $comics = include $comicsFile;
//         return view('partials.comics', compact('comics'));
//     } 
// });
Route::resource('comics',ComicController::class);
Route::get('/search', [ComicController::class, 'search'])->name('comics.search');