<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Awesome Ideas' }}</title>

        {{-- Styles --}}
        @vite(['resources/js/app.js']) {{-- To load alpineJS --}}

        <script src="https://cdn.tailwindcss.com"></script> {{-- tailwindcss --}}
        
        @livewireStyles {{-- Livewire --}}
        
    </head>
    <body class="font-sans antialiased">

        {{ $slot }}

        @livewireScripts
    </body>
</html>
