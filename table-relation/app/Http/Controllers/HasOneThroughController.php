<?php

namespace App\Http\Controllers;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class HasOneThroughController extends Controller
{
        public function index()
    {
        $product = Mechanic::with('carOwner')->get();
        //    return  $product;
         return view('has-one-through.index',compact('product'));
    }
}