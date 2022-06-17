<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <link href="{{ asset('manifest.json') }}" rel="manifest">
        <meta charset="utf-8">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Transporter">
        <meta name="apple-mobile-web-app-title" content="Transporter">
        <meta name="theme-color" content="#374151">
        <meta name="msapplication-navbutton-color" content="#374151">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="msapplication-starturl" content="/">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="logo.png" href="https://transport.hersarma.in.rs/img/manifest_images/transportlogo512.png">
        <link rel="apple-touch-icon" type="logo.png" href="https://transport.hersarma.in.rs/img/manifest_images/transportlogo192.png">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('css/app.css?v=').time() }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js?v=').time() }}" defer></script>
        <script src="{{ asset('js/serviceWorker.js') }}" defer></script>
        <script src="{{ asset('js/search.js?v=').time() }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
         @stack('scripts')
    </head>
    <body class="font-sans antialiased h-full">
        @include('messages.installPromt')
        @include('messages.welcomeMessage')
        <div x-data="{ open: false }">
            @include('menu_parts.admin.sidebar')
            <div class="lg:pl-64 flex flex-col">
            @include('menu_parts.admin.navbar')
            </div>
        </div>
        <main class="lg:pl-64 flex-1">
        @yield('content')
        </main>
    </body>
</html>
