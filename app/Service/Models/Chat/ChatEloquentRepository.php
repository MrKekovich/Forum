<?php

namespace App\Service\Models\Chat;

use App\Models\Chat;
use App\Models\Post;
use App\Service\Models\EloquentRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ChatEloquentRepository extends EloquentRepository
{

    public function getModel(): Model
    {
        return new Chat;
    }

    public function getById(int $id): Model|Collection|null
    {
        $post = Post::find($id);
        return $post?->chats;
    }
}
