<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Icon -->
        <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon.ico">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div id="root"></div>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
