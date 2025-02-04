<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-900 text-white antialiased">
        <header class="border-b border-gray-800">
            <nav class="container mx-auto flex items-center justify-between px-4 py-6">
                <div class="flex items-center">
                    <a href="/">
                        <img src="/images/laracasts-logo.svg" alt="laracasts" class="w-32 flex-none">
                    </a>
                    <ul class="flex ml-16 space-x-8">
                        <li><a href="#" class="hover:text-gray-400">Games</a></li>
                        <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                        <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                    </ul>
                </div>
                <div class="flex items-center">
                    <div class="relative">
                        <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-3 pl-8 py-1" placeholder="Buscar...">
                        <div class="absolute top-0 flex items-center h-full ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fill-current text-gray-400 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>
                        </div>
                    </div>
                    <div class="ml-6">
                        <a href="#"><img src="/images/avatar.jpg" alt="avatar" class="rounded-full w-8"></a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-8">
            @yield('content')
        </main>

        <footer class="border-t border-gray-800">
            <div class="container mx-auto px-4 py-6">
                Powered by <a href="#" class="underline hover:text-gray-400">IGDB API</a>
            </div>
        </footer>
    </body>
</html>
