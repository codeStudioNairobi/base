<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/storage/cover_images/img/shepherdinn.ico"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">

    <!-- Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/a90a903da1.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Custom Global Styles-->
    <style>
        <link href="https://fonts.googleapis.com/css?family=Pinyon+Script&display=swap" rel="stylesheet">
       body, html{
           height: 100%;
           margin: 0;
           font-size: 16px;
           font-weight: 400;
           line-height: 1.8em;
           overflow-x: hidden;
       }
       .navbar-brand > span {
        font-family: 'Pinyon Script', ;
       }
    </style>

    <!--Custom Page Specific Styles-->
    @yield('style')
</head>
<body>
    <div id="app">
        <div class="wrapper">
            @include('inc.navbar')
            <div style="margin-top:67px;">
                @include('inc.messages')
                @yield('content')
            </div>
            @include('inc.footer')
        </div>
    </div>
</body>
</html>
