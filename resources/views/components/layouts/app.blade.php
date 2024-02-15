<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tasbih Counter</title>
        @vite('public/css/style.css')
    </head>
    <body>
        {{ $slot }}

    </body>
    @vite('resources/js/app.js')
</html>
