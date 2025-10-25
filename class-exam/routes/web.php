<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManyToManyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students-subjects', [ManyToManyController::class, 'index'])->name('students.subjects');
