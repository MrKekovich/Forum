@extends('layouts.admin')
@section('title')
    Posts
@endsection
@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-success p-3 m-lg-4">Add one</a>
    <hr>
    <div class="container">
        <div class="list-group">
            @foreach($posts as $post)
                <a href="{{ route('posts.show', $post->id) }}"
                   class="list-group-item list-group-item-action list-group-item-dark">
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
                </a>
                @can('view', [auth()->user(), $post])
                    <a href="{{ route('posts.edit', $post->id) }}"
                       class="list-group-item list-group-item-action list-group-item-primary">edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="list-group-item list-group-item-action list-group-item-danger"
                                onclick="alert('post will be deleted')">delete
                        </button>
                    </form>
                @endcan
                <br>
            @endforeach
        </div>
        {{ $posts->withQueryString()->links() }}
    </div>
@endsection
