<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
       
        <link href="{{ asset('css/app.css?v=').time() }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js?v=').time() }}" defer></script>
    </head>
    <body class="font-sans antialiased h-full">
        @include('messages.welcomeMessage')
        <div x-data="{ open: false }">
            @include('menu_parts.admin.sidebar')

            <div class="md:pl-64 flex flex-col">
            @include('menu_parts.admin.navbar')
            <main class="flex-1">
            @yield('content')
            </main>
            </div>
        </div>
        

    </body>
</html>
