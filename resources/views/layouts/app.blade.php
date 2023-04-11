<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header style="text-align: center">
        <h1>LARAVEL-MODEL-CONTROLLER</h1>

        {{-- <nav class="d-flex justify-content-center" style="background-color: black; gap: 30px;">
            <ul style="color: white; list-style-type: none; display: contents;">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="/contacts">Contatti</a>
                </li>
            </ul>
        </nav> --}}
    </header>

    <main class="bg-light">
        @yield('main-content')
    </main>

</body>

</html>