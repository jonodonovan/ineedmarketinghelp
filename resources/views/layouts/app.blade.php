<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @if (App::environment('production'))
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115926298-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-115926298-2');
        </script>
    @endif

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }} @yield('meta_title')</title>
    <meta name="description" content="The largest professional job board for marketers, digital marketers, graphic designers, web developers, and more." />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('head_scripts')
    @yield('styles')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    <div class="container" style="margin:50px auto;">
        @yield('content')
    </div>

    @yield('foot_scripts')
</body>
</html>
