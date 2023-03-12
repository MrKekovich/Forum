@yield('before_html')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <meta name="google-site-verification" content="hTEtWvUH6Tx5qBQvCfFtVCw8a7zWbFbJb2o9MFEzpr0"/>
    <title>@yield('title')</title>
</head>
<body class="d-flex flex-column h-100">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Forum-Music</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                    aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link{{ (request()->is('/')) ? ' active' : '' }}" aria-current="page"
                           href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ (request()->is('posts*')) ? ' active' : '' }}"
                           href="{{ route('posts.index') }}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ (request()->is('news.index*')) ? ' active' : '' }}"
                           href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ (request()->is('about.index*')) ? ' active' : '' }}"
                           href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    {{--    <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <a class="navbar-brand" href="{{ route('index.index') }}">Forum-Music</a>--}}
    {{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
    {{--                <span class="navbar-toggler-icon"></span>--}}
    {{--            </button>--}}
    {{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
    {{--                    <li class="nav-item">--}}
    {{--                        <a class="nav-link active" aria-current="page" href="{{ route('index.index') }}">Home</a>--}}
    {{--                    </li>--}}
    {{--                    <li class="nav-item">--}}
    {{--                        <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>--}}
    {{--                    </li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}
</header>
@yield('content')
<br><br><br><br>
<footer class="bg-light text-center text-lg-start mt-5">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © {{ date('Y') }} Copyright:
        <a class="text-dark" href="#">MrKekovich</a>
    </div>
    <!-- Copyright -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
