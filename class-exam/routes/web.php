<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\HasManyThroughController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students-subjects', [ManyToManyController::class, 'index'])->name('students.subjects');

Route::get('/has-many-through', [HasManyThroughController::class, 'index'])->name('employee.clients');
