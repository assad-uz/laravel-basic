<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasOneThroughController;
use App\Http\Controllers\HasManyThroughController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/has-one-through', [HasOneThroughController::class, 'index']);

// HasManyThrough 
Route::get('/has-many-through', [HasManyThroughController::class, 'index']);