<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// View for all
Route::get('/', [PostController::class, 'index']);

// post
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'filestore'])->name('store');