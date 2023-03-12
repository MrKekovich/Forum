<?php

namespace App\Http\Controllers;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Category;
use App\Models\Chat;
use App\Models\Post;
use App\Service\PostService;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index(FilterRequest $request)
    {
        $posts = PostService::index($request);
        return view('site.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('site.posts.create');
    }

    public function store(StoreRequest $request)
    {
        $post = PostService::store($request);

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('site.posts.post_show', compact('post'));
    }

    public function edit(Post $post)
    {
        $this->authorize('view', [auth()->user(), $post]);
        $categories = Category::all()->sortBy('id');
        return view('site.posts.edit', compact('post', 'categories'));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $this->authorize('view', [auth()->user() ,$post]);

        $post = PostService::update($request, $post);
        return $post instanceof Post
            ? redirect()->route('posts.show', $post->id)
            : view('', compact('post'));
    }

    public function destroy(Post $post)
    {
        $this->authorize('view', [auth()->user() ,$post]);

        return PostService::destroy($post);
    }
}
