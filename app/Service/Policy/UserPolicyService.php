<?php

namespace App\Service\Policy;

use App\Models\Chat;
use App\Models\Post;
use App\Models\User;

class UserPolicyService
{
    public static function allowView(User $model, Post | Chat $has)
    {
        $user = auth('web')->user();
        if ($user instanceof User and $user->role != null ){
            if ($user->id === $has->user_id || $user->role->role === 'admin') {
                return true;
            }
        }
        return false;
    }
}
