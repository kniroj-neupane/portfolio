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
    <x-layout.footer></x-layout.footer>
@vite(['resources/js/app.js'])
<footer>Footer</footer>
        </body>
</html>
