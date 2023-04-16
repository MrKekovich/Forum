<?php

namespace App\Http\Controllers;

use App\Http\Requests\Chat\StoreRequest;
use App\Http\Requests\Chat\UpdateRequest;
use App\Models\Chat;
use App\Service\Models\Chat\ChatService;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public static function index($chats)
    {
        return view('site.chats.index', compact('chats'));
    }

    public function store(StoreRequest $request)
    {
        ChatService::store($request);
        return redirect()->back();
    }

    public function show(Chat $chat)
    {
        return view('site.chats.chat_show', compact('chat'));
    }

    public function update(UpdateRequest $request, Chat $chat)
    {
        $this->authorize('view', [auth('web')->user(), $chat]);
        $data = $request->validated();
        $chat->update($data);
        return redirect()->route('chats.show', $chat->id);
    }

    public function edit(Chat $chat)
    {
        $this->authorize('view', [auth('web')->user(), $chat]);
        return view('site.chats.edit', compact('chat'));
    }

    public function destroy(Chat $chat)
    {
        $this->authorize('view', [auth('web')->user(), $chat]);
        $chat->delete();
        return redirect()->route('posts.show', $chat->post);
    }
}
