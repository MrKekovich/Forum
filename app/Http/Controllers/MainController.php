<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MainController extends Controller
{

    public function index()
    {
        $posts = Post::orderByDesc('id')->paginate(5);
        return view('auth.register', compact('posts'));
    }
}
