<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'pages.contact');
Route::get('/portfolio', function()  {
    return view('pages.portfolio');
});



Route::view('/policy-policy', 'pages.policy-policy');
Route::view('/terms-of-use', 'pages.terms-of-use');