<?php

namespace App\Http\Controllers;

use App\Http\Filters\PostFilter;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderByDesc('id')->paginate(5);
        return view('site.main.admin.index', compact('posts'));
    }
}
