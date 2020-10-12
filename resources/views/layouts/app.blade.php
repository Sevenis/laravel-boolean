<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
         <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap" rel="stylesheet">
        <title>@yield('titolo')</title>
    </head>
    <body>
        <header>
            @include('partials.header')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
