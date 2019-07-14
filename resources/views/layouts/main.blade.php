<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <script src="{{asset('js/app.js')}}"></script>
    <title>Ask a Pig!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{asset('images/pig.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
        Ask a Pig!
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Questions</a>
            <a class="nav-item nav-link" href="#">Random Question</a>
            <a class="nav-item nav-link" href="#">Pig FAQS</a>
        </div>
    </div>
</nav>
<div class="container">
    <h1 class="text-center">Ask a Pig!</h1>
    @yield('content')
</div>
</body>
</html>