<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        return view('create');
    }


    public function filestore(Request $request) {
        // return $request->all(); 
        // return dd($request->all()); 


        return $request->name; 
    }
}
