<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome'); //Forma 2

Route::view('/contact', 'contact');

Route::view('/blog', 'blog');

Route::view('/about', 'about');