@extends('layouts.admin')
@section('title')
    Tags
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="list-group">
                @foreach($tags as $tag)
                    <div class="list-group-item">
{{--                        <div><a href="{{ route('', $tag->id) }}">#{{ $tag->title }}</a></div>--}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
