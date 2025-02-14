<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    @vite('resources/css/app.css')
</head>

<body>

    @include('include.layout.header')

    @yield('content')

    @include('include.layout.footer')

    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>