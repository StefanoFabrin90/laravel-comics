<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Head DC comics', 'DC Comics')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- header --}}
    @include('partials.header')

    {{-- main --}}
    <main>
        @yield('main-content')
    </main>

    {{-- footer --}}
    @include('partials.footer')

    {{-- js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>