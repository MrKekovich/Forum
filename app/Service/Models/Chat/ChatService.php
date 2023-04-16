<?php

namespace App\Service\Models\Chat;

use App\Http\Filters\ChatFilter;
use App\Models\Chat;
use App\Service\BaseService;
use App\Service\Models\EloquentRepository;
use Illuminate\Support\Facades\DB;

class ChatService extends BaseService
{
    protected ChatEloquentRepository $repository;

    public function getEloquent(): EloquentRepository
    {
        return $this->repository;
    }
}
