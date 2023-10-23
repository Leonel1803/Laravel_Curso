<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

//Vistas

/*Route::get('/', function () { Forma 1
    return view('welcome');
});*/

/*Route::view('/', 'welcome'); //Forma 2

Route::view('/contact', 'contact');

Route::view('/blog', 'blog');

Route::view('/about', 'about');*/

$post = [
    ['title' => 'First post'],
    ['title' => 'Second post'],
    ['title' => 'Third post'],
    ['title' => 'Fourth post'],
];


Route::view('/', 'welcome')->name('welcome'); //Forma 3 (Recomendada)

Route::view('/contact', 'contact')->name('contact');

Route::view('/blog', 'blog', ['posts' => $post])->name('blog');

Route::get('/blog2', function(){
    $post = [
        ['title' => 'First post'],
        ['title' => 'Second post'],
        ['title' => 'Third post'],
        ['title' => 'Fourth post'],
    ];

    return view('blog2', ['posts' => $post]);
})->name('blog2');

Route::get('/blog3', PostController::class)->name('blog3');

Route::get('/blog4', [PostController::class, 'index'])->name('blog4');

Route::get('/blog5', [PostController::class, 'index2'])->name('blog5');

Route::get('/blog6', [PostController::class, 'index3'])->name('blog6');

Route::get('/blog7', [PostController::class, 'index4'])->name('blog7');

Route::view('/about', 'about')->name('about');

Route::view('/welcome2', 'welcome2')->name('welcome2');

Route::view('/welcome3', 'welcome3')->name('welcome3');
