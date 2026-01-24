<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Aquí se inyectará el SEO particular de cada página --}}
    @yield('seo')

    {{-- schema local  --}}
    @include('partials.schema-local')

    {{-- Scripts Globales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    {{-- Estilos Globales --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap');
        body { font-family: 'Outfit', sans-serif; }
    </style>

    {{-- CSS extra --}}
    @stack('styles')
</head>
<body class="initialised bg-slate-50 text-slate-800">

    {{-- Navegación Dinámica --}}
    <x-navigation />

    <main>
        {{-- contenido de cada página --}}
        @yield('content')
    </main>

    {{-- Footer  --}}
    <x-footer />

    {{-- JS extra (como un mapa o validación) --}}
    @stack('scripts')
</body>
</html>
