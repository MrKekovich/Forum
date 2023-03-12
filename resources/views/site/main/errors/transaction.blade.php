@extends('layouts.admin')
@section('content')
<h1 style="text-align: center">
    {{ $post }}
    <br>
    <a href="{{ url()->previous() }}">back</a>
</h1>
@endsection
