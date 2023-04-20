<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Service\BaseService;
use App\Service\Models\Tag\TagService;
use Illuminate\Http\Request;

class TagController extends BaseController
{

    public function __construct(TagService $service)
    {
        parent::__construct($service);
    }

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(int $postId)
    {
        return $this->service->getById($postId);
    }

    public function update(Request $request, Tag $tag)
    {
        //
    }

    public function destroy(Tag $tag)
    {
        //
    }
}
