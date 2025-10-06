<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/add-user', function () {
    return view('pages.add-user');
});
Route::get('/manage-user', function () {
    return view('pages.manage-user');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/main', function () {
    return view('master');
});
