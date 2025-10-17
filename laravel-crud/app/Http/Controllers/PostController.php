<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function create() {
        return view('create');
    }


    public function filestore(Request $request): RedirectResponse {

        Post::create($request->only([
            'name',
            'description',
            'image',
        ]));
        // return dd($request->all()); 
        return redirect('/')->with('success', 'Post successfully created!');;
    }
}
