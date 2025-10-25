<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    public function index()
    {
        $students = Student::with('subjects')->get();
        return view('index', compact('students'));
    }
}
