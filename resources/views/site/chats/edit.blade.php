@extends('layouts.admin')
@section('title')
    {{ $chat->user_name }}
@endsection
@section('content')
    <form action="{{ route('chats.update', $chat->id) }}" method="post" class="form-check mt-3">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="user_name" class="form-label">user name</label>
            <input type="text" class="form-control" id="user_name" name="user_name" maxlength="255" value="{{ $chat->user_name }}">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">message</label>
            <textarea class="form-control" id="message" name="message" rows="3">{{ $chat->message }}</textarea>
        </div>
        <button class="btn btn-primary">save</button>
    </form>
    <form action="{{ route('chats.destroy', $chat->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger m-lg-3" onclick="alert('message will be deleted')">delete message
        </button>
    </form>
    <pre>
    <hr>
        <div class="container">
            <div class="row">
                <div class="list-group-item"><strong>nickname:    </strong>{{ $chat->user_name }}</div>
                <div class="list-group-item"><strong>message:     </strong>{{ $chat->message }}</div>
            </div>
        </div>
    </pre>
@endsection
