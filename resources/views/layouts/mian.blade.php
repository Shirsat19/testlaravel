<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('desc')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    @include('layouts.header')
    @yield('content','demo')
    @include('layouts.footer')
</body>
</html>