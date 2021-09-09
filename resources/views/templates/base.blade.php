<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MOVIES-  @yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <header>
            @include('templates.header')
        </header>

        <div>
            @yield('content')
        </div>

        <footer>
            @include('templates.footer')
        </footer>
    </body>
</html>