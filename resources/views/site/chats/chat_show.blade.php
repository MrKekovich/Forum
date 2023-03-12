@extends('layouts.admin')
@section('title')
    {{ $chat->chat_user_name }}
@endsection
@section('content')
    <a href="{{ route('posts.show', $chat->post->id) }}"
       class="list-group-item list-group-item-action list-group-item-dark mb-5">
        <figure class="figure">
            <img
                src="{{ $chat->post->cover_image }}"
                class="figure-img img-fluid rounded"
                onerror="this.onerror=null; this.src='https://via.placeholder.com/400x300/777777/dddddd?text=No%20Image'"
                alt="{{ $chat->post->cover_image }}">
            <figcaption class="figure-caption">
                {{ $chat->post->title }}
                <p>{{ $chat->post->content }}</p><br>
                @foreach($chat->post->tags as $tag)
                    #{{ $tag->title }}
                @endforeach
                <br>
                created by: {{ $chat->post->user->name }}
            </figcaption>
        </figure>
    </a>
    <div class="card mb-5 mt-5">
        <div class="card-body">
            <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3"
                     src="{{ $chat->user->profile_pic }}"
                     alt="avatar"
                     width="40" height="40"
                     onerror="this.onerror=null; this.src='https://i.imgur.com/4q8VYRe.png'"/>
                <div class="w-100">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="text-primary fw-bold mb-0">
                            <div class="active">{{ $chat->user->name }}</div>
                            <div class="text-dark ms-2">{{ $chat->message }}</div>
                        </h6>
                        <p class="mb-0">{{ $chat->created_at }}</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="small mb-0" style="color: #aaa;">
                            {{--                                    <a href="#!" class="link-grey">Remove</a> •--}}
                            {{--                                    <a href="#!" class="link-grey">Reply</a> •--}}
                            {{--                                    <a href="#!" class="link-grey">Translate</a>--}}
                        </p>
                        <div class="d-flex flex-row">
                            {{--                                    <i class="fas fa-star text-warning me-2"></i>--}}
                            {{--                                    <i class="far fa-check-circle" style="color: #aaa;"></i>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @can('view', [auth()->user(), $chat])
        <form action="{{ route('chats.edit', $chat->id) }}">
            <button type="submit" class="btn btn-primary mt-3">edit</button>
        </form>
    @endcan
    <form action="{{ route('error.build-in-progress') }}" method="post" class="form-check">
        @csrf
        @method('PUT')
        <div class="mb-3 m-lg-5">
            <label for="message" class="form-label">Reply</label>
            <textarea class="form-control" id="message" rows="3" placeholder="reply"
                      name="message"></textarea><br>
            <button type="submit" class="btn btn-primary">send</button>
            <input type="hidden" name="post_id" id="post_id" value="{{ $chat->post->id }}"/>
        </div>
    </form>
@endsection
