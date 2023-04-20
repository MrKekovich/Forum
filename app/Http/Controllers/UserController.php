<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\BaseService;
use App\Service\Models\User\UserService;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function __construct(UserService $service)
    {
        parent::__construct($service);
    }

    public function index()
    {
        return $this->service->index();
    }

    public function show(int $id)
    {
        return $this->service->getById($id);
    }
}
