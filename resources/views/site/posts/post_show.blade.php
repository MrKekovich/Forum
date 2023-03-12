@extends('layouts.admin')
@section('title')
    {{ $post->title }}
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="list-group">
                <div class="list-group-item list-group-item-dark">
                    <figure class="figure">
                        <img
                            src="{{ $post->cover_image }}"
                            class="figure-img img-fluid rounded"
                            onerror="this.onerror=null; this.src='https://via.placeholder.com/400x300/777777/dddddd?text=No%20Image'"
                            alt="{{ $post->cover_image }}">
                        <figcaption class="figure-caption">
                            {{ $post->title }}
                            <p>{{ $post->content }}</p><br>
                            @foreach($post->tags as $tag)
                                #{{ $tag->title }}
                            @endforeach
                            <br>
                            created by: {{ $post->user->name }}
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        @can('view', [auth()->user(), $post])
            <div class="row">
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary mt-1">edit</a>
            </div>
        @endcan
        <div class="row">
            <a href="{{ route('posts.index') }}" class="btn btn-primary mt-1">back</a>
        </div>
    </div>
    <form action="{{ route('chats.store', $post) }}" method="post" class="form-check">
        @csrf
        <div class="mb-3 m-lg-5">
            <label for="message" class="form-label">message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="message"
                      name="message"></textarea><br>
            <button type="submit" class="btn btn-primary">send</button>
            <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}"/>
        </div>
    </form>
    {{ \App\Http\Controllers\ChatController::index($post->chats()->paginate()) }}
@endsection
