<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Dony Laksmana'], ['title' => 'Contact']);
});

Route::get('/blog', function () {
    return view('blog',['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});