@extends('layouts.admin')
@section('title')
    Tag {{ $tag->id }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="list-group">
                @foreach($tag->posts() as $post)
                    @dd($tag)
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
                            </figcaption>
                        </figure>
                    </a>
                    <a href="{{ route('posts.edit', $post->id) }}"
                       class="list-group-item list-group-item-action list-group-item-primary">edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="list-group-item list-group-item-action list-group-item-danger"
                                onclick="alert('post will be deleted')">delete
                        </button>
                    </form>
                    <br>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
