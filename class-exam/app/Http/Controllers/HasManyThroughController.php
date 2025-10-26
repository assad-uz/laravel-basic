<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class HasManyThroughController extends Controller
{
    public function index()
    {
        $employees = Employee::with('clients')->get();
        // return $employees;
        
        return view('has-many-through.index', compact('employees'));
        
    }
}