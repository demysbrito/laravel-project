<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/second', function () {
//     return view('second');
// });


Route::view('/second', 'second'); 

// Route::view('/', 'home')->name('home'); 
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');