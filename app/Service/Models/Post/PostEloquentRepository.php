<?php

namespace App\Service\Models\Post;

use App\Models\Post;
use App\Service\Models\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class PostEloquentRepository extends EloquentRepository
{
    protected Post $model;
    public function getModel(): Model
    {
        return $this->model;
    }
}
