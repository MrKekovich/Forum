@extends('layouts.admin')
@section('content')
    <h1 style="text-align: center">Welcome, {{ Auth::user()->name }}!</h1>
    <ul>
        <li>
            <a href="{{ route('posts.index') }}">123</a>
        </li>
    </ul>
@endsection
