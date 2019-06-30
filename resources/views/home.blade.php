<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <title>WeCom4U-Test</title>
    </head>
    <body>
        <div class="container" id="app"></div>
    </body>
    <script>
        // Create a variable to avoid api call. TODO find a cleaner way ?
        const hikes = @json($hikes).reverse();
    </script>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
