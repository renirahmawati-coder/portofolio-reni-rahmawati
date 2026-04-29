<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/portofolio', 'home');

Route::view('/about', 'about');
Route::view('/skills', 'skills');
Route::view('/experience', 'experience');
Route::view('/certificate', 'certificate');
Route::view('/contact', 'contact');