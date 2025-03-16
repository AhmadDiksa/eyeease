<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sinp')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
