<?php

namespace App\Http\Controllers;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class HasOneThroughController extends Controller
{
        public function index()
    {
        $mechanics = Mechanic::with('carOwner')->get();
        //    return  $mechanics;
         return view('has-one-through.index',compact('mechanics'));
    }
}