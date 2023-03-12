@extends('layouts.admin')
@section('title')
    create post
@endsection
@section('content')
    <form action="{{ route('posts.store') }}" method="post" class="form-check mt-3">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title
                @error('title')
                <p class="text-danger fw-bold d-inline-block">*{{ $message }}</p>
                @enderror</label>
            <input type="text" class="form-control" id="title" placeholder="your title" name="title" maxlength="255"
                   value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content
                @error('content')
                <p class="text-danger fw-bold d-inline-block">*{{ $message }}</p>
                @enderror</label>
            <textarea class="form-control" id="content" rows="3" name="content"
                      placeholder="content">{{ old('content') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image" placeholder="https://via.placeholder.com/400x300/777777/dddddd?text=No%20Image"
                   value="{{ old('cover_image') }}"
                   maxlength="255">
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" class="form-control" id="tags" name="tags" placeholder="example1 example_2"
                   value="{{ old('tags') }}"
                   maxlength="255">
        </div>
        <div class="form-group mb-3">
            <label for="category_id">Select category</label>
            <select class="form-control" id="category_id" name="category_id" onselect="{{ old('category_id') }}">
                @foreach(\App\Models\Category::all()->sortBy('id') as $category)
                    <option
                        {{ old('category_id') == $category->id ? ' selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">publish</button>
    </form>
    <hr>
@endsection
