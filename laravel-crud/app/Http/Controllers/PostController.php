<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    // View
    public function index()
    {
        $posts = Post::all(); 
        return view('welcome', compact('posts')); 
    }


    // Create
    public function create() {
        return view('create');
    }


    public function filestore(Request $request): RedirectResponse {

        Post::create($request->only([
            'name',
            'email',
            'password',
        ]));
        // return dd($request->all()); 
        return redirect('/')->with('success', 'Post successfully created!');;
    }

}
