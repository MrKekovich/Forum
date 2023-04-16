<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\FilterRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Service\Models\Post\PostService;

class PostController extends BaseController
{
    public function __construct(PostService $service)
    {
        parent::__construct($service);
    }

    public function index()
    {
        return $this->service->index();
    }

    public function store(StoreRequest $request)
    {
        return $this->service->store($request);
    }

    public function show(Post $post)
    {
        return $this->service->show($post);
    }

    public function update(UpdateRequest $request, Post $post)
    {
        return $this->service->update($post, $request);
    }

    public function destroy(Post $post)
    {
        return $this->service->destroy($post);
    }
}
