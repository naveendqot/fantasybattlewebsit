<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FatnasyBattle @yield('title')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav.png" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" type="text/css">
    <link
    rel="stylesheet"
    href="{{asset('css/swiper-bundle.min.css')}}"/>
</head>
<body>


    <div id="app">
        @include('headerhome')

        @yield('content')
    </div>


    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
