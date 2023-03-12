<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all()->sortByDesc('id');
        return view('site.posts.tags.index', compact('tags'));
    }

    public function show(Tag $tag)
    {
        return view('site.posts.tags.show', compact('tag'));
    }
}
