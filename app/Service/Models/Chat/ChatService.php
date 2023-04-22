<?php

namespace App\Service\Models\Chat;

use App\Models\Chat;
use App\Service\BaseService;
use App\Service\Models\EloquentRepository;
use Illuminate\Support\Facades\DB;

class ChatService extends BaseService
{
    public function getEloquent(): EloquentRepository
    {
        return new ChatEloquentRepository;
    }
}
