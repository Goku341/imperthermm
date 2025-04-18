<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Imperterm')</title>

    {{-- Estilos globales --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @stack('styles')
    @vite('resources/css/app.css', 'resources/css/animations.css')

    {{-- Estilos globales --}}
</head>
<body class="bg-gray-100">

    {{-- Encabezado común --}}
    @include('partials.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer común --}}
    @include('partials.footer')

    {{-- Scripts globales --}}
    @vite(['resources/js/carousel.js'])
    @vite(['resources/js/animations.js'])
    @vite(['resources/js/functions.js'])
    @vite(['resources/js/contactform'])
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    @stack('scripts')
</body>
</html>
