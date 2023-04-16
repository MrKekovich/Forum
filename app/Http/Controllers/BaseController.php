<?php

namespace App\Http\Controllers;

use App\Service\BaseService;
use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    public BaseService $service;

    public function __construct(BaseService $service)
    {
        $this->service = $service;
    }
}
