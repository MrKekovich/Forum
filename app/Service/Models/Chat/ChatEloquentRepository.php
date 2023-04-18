<?php

namespace App\Service\Models\Chat;

use App\Models\Chat;
use App\Service\Models\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class ChatEloquentRepository extends EloquentRepository
{

    public function getModel(): Model
    {
        return new Chat;
    }
}
