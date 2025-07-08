<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <title>VB Lead</title>

        <!-- css -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div>
            @include('layouts.navigation')

            <main>
                 {{ $slot }}
            </main>

            {{-- @include('layouts.footer') --}}
        </div>
       
    </body>
</html>