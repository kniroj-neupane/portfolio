<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>       
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <x-layout.navbar :navigationItems="$navigationItems"></x-layout.navbar>
        {{ $slot }}
    <div>
    <x-layout.footer></x-layout.footer>
    </div>
@vite(['resources/js/app.js'])
        </body>
</html>
