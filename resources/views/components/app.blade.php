<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Awesome Ideas' }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        {{-- Icons --}}
        <script src="https://kit.fontawesome.com/e6c839cb47.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Styles --}}
        <script src="https://cdn.tailwindcss.com"></script> {{-- tailwindcss --}}
        @livewireStyles
        
    </head>
    <body class="font-sans antialiased">

        {{ $slot }}

        @livewireScripts
    </body>
</html>
