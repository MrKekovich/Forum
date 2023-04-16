<?php

namespace App\Http\Controllers;

use App\Http\Requests\Chat\StoreRequest;
use App\Http\Requests\Chat\UpdateRequest;
use App\Models\Chat;
use App\Service\BaseService;
use App\Service\Models\Chat\ChatService;

class ChatController extends BaseController
{
    public function __construct(ChatService $service)
    {
        parent::__construct($service);
    }

    public function index()
    {
        return $this->service->index();
    }

    public function store(StoreRequest $request)
    {
        return $this->service->store($request);
    }

    public function show(Chat $chat)
    {
        return $this->service->show($chat);
    }

    public function update(UpdateRequest $request, Chat $chat)
    {
        return $this->service->update($chat, $request);
    }

    public function destroy(Chat $chat)
    {
        return $this->service->destroy($chat);
    }
}
