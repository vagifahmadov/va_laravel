<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PodcastsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Documentary;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', "TestController@test_page")->name('home');
Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/podcasts', [PodcastsController::class, "podcast_page"])->name('podcasts');
Route::get('/contact', [ContactController::class, "contact_page"])->name('contact');
Route::post('/contact', [ContactController::class, "contact_form"]);
Route::get('/help', [Documentary::class, 'doc'])->name('help');
Route::get('/about', [Documentary::class, 'about']);

// Route::get( "/hi", function(){
//     return view('hi');
// }
// );
