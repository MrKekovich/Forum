<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $chats = Chat::all();
        $users = User::all();
        $tags = Tag::all();
        return response()
            ->view('site.sitemap.index', compact('posts', 'chats', 'users', 'tags'))
            ->header('Content-Type', 'text/xml');
    }
}
