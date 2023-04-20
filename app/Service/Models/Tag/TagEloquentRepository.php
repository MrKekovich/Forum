<?php

namespace App\Service\Models\Tag;

use App\Models\Post;
use App\Models\Tag;
use App\Service\Models\EloquentRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TagEloquentRepository extends EloquentRepository
{
    public function getModel(): Model
    {
        return new Tag;
    }

    public function getById(int $id): Model|Collection|null
    {
        $post = Post::find($id);
        return $post?->tags;
    }
}
