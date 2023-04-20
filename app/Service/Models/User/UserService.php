<?php

namespace App\Service\Models\User;

use App\Service\BaseService;
use App\Service\Models\EloquentRepository;

class UserService extends BaseService
{
    public function getEloquent(): EloquentRepository
    {
        return new UserEloquentRepository();
    }
}
