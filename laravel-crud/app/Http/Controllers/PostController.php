<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        return view('create');
    }


    public function filestore(Request $request) {
        // return $request->all(); 
        // return dd($request->all()); 

        $post = new Post;
        $post->name = $request->name; 
        $post->description = $request->description; 
        $post->image = $request->image; 

        $post->save();
    }
}
