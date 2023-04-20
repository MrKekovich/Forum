<?php

namespace App\Service\Models\User;

use App\Models\Post;
use App\Models\User;
use App\Service\Models\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class UserEloquentRepository extends EloquentRepository
{
    public function getModel(): Model
    {
        return new User;
    }
}
