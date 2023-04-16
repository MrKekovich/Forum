<?php

namespace App\Service\Models\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Chat;
use App\Models\Post;
use App\Models\Tag;
use App\Service\BaseService;
use App\Service\Models\EloquentRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use LaravelIdea\Helper\App\Models\_IH_Post_C;

class PostService extends BaseService
{
    protected PostEloquentRepository $repository;

    public function getEloquent(): EloquentRepository
    {
        return $this->repository;
    }
}
