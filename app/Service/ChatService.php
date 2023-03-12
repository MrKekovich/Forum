<?php

namespace App\Service;

use App\Http\Filters\ChatFilter;
use App\Models\Chat;
use Illuminate\Support\Facades\DB;

class ChatService
{

    public static function index($chats, $data)
    {
        try {
            DB::beginTransaction();

            $page = $data['page'] ?? 1;
            $perPage = $data['per_page'] ?? 5;

            $filter = app()->make(ChatFilter::class, ['queryParams' => array_filter($data)]);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $chats->filter($filter)->paginate($perPage, ['*'], 'page', $page);
    }

    public static function store($request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        return Chat::create($data);
    }
}
