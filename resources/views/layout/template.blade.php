<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>erin platvoet</title>

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/index.css">
        
        <style>
            body{
                margin:0;
                background-color:#000000;
            }
        </style>

        <!-- Fonts -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;400;700&family=Handlee&family=Oswald:wght@200;300;400;500;600;700&display=swap');
        </style>

    </head>
    <body>
        <div>
        @include('partials.global.hero')
        @include('partials.global.nav')
        @yield('content')
        <!-- @include('partials.home-sections.about')
        @include('partials.home-sections.portfolio')
        @include('partials.home-sections.resume') -->
        @include('partials.global.footer')

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
