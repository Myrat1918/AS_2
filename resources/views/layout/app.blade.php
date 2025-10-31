<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Football News')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body class="bg-dark text-white">
    @include('nav.nav')

    <main class="container-lg mx-auto mt-5 px-4 bg-white p-4 p-md-5 rounded shadow-lg">
        @yield('content')
    </main>

    <footer class="mt-5 py-5 text-center small text-muted bg-dark text-white border-top">
        &copy; {{ date('Y') }} Football News. All rights reserved.
    </footer>

</body>
</html>
