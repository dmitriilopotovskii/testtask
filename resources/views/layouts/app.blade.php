<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body >
<div id="app">
    <div class="max-w-screen-xl mx-auto px-5 bg-white min-h-sceen">
        @yield('content')
    </div>
</div>
</body>
</html>
