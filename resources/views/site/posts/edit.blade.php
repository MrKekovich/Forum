@extends('layouts.admin')
@section('title')
    post {{ $post->id }}
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
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('posts.update', $post->id) }}" method="post" class="form-check mt-3">
        @csrf
        @method('patch')
        <div class="mb-2 m-lg-5">
            <label for="title" class="form-label">Edit Title</label>
            <input value="{{ $post->title }}" class="form-control mb-1" type="text" maxlength="255"
                   name="title" id="title"
                   placeholder="nickname">
            <label for="content" class="form-label">Edit Content</label>
            <textarea class="form-control" id="content" rows="3" placeholder="message"
                      name="content">{{ $post->content }}</textarea>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="text" class="form-control" id="cover_image" name="cover_image" placeholder="https://via.placeholder.com/400x300/777777/dddddd?text=No%20Image"
                       value="{{ $post->cover_image }}"
                       maxlength="255">
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags" placeholder="#example1 #example2"
                       maxlength="255" value="@foreach($post->tags as $post_tag)#{{ $post_tag->title }} @endforeach">
            </div>
            <div class="form-group mb-3">
                <label for="category_id">Select category</label>
                <select class="form-control" id="category_id" name="category_id" onselect="{{ old('category_id') }}">
                    @foreach($categories as $category)
                        <option
                            {{ $post->category_id == $category->id ? 'selected' : ''}}
                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">edit</button>
        </div>
    </form>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        <div class="m-lg-5">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger m-lg-3" onclick="alert('post will be deleted')">delete post
            </button>
        </div>
    </form>
@endsection
