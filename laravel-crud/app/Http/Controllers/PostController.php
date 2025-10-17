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
        $imageName = $request->file('image') 
            ? basename($request->file('image')->store('public/images')) 
            : null;

        Post::create($request->only([
            'name',
            'description',
            'image' => $imageName,
        ]));
        // return dd($request->all()); 
        return redirect('/')->with('success', 'Post successfully created and image uploaded!');;
    }
}
