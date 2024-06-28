<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/second', function () {
//     return view('second');
// });


Route::view('/second', 'second'); 

Route::view('/', 'home'); 
Route::view('contact', 'contact');
Route::view('about', 'about');