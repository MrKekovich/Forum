<?php

namespace App\Service\Models\Tag;

use App\Models\Post;
use App\Service\BaseService;
use App\Service\Models\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class TagService extends BaseService
{
    public function getEloquent(): EloquentRepository
    {
        return new TagEloquentRepository;
    }
}
