<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'INCORS') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-black">
        <!-- Navigation content -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-black text-white">
        <!-- Footer content -->
    </footer>
</body>
</html>
