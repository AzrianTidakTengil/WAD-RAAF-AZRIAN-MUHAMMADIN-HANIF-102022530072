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

        <script src="https://unpkg.com/lucide@latest"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-linen-50">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="container mx-auto px-6 py-8 flex-grow">
                @isset($header)
                <div class="p-6 mb-8">
                    <h2 class="text-4xl font-bold mb-2 text-espresso-900">{{ $header }}</h2>
                    @isset($description)
                    <p class="text-toffee-brown-800">{{ $description }}</p>
                    @endisset()
                </div>
                @endisset
                {{ $slot }}
            </main>
        </div>
        @include('layouts.footer')
    </body>
</html>
