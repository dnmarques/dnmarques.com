<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Meta Description -->
        <meta name="description" content="Full Stack Developer specializing in Laravel, React, and modern web technologies. Building scalable web applications with clean code and innovative solutions.">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="Diogo Marques - Full Stack Developer">
        <meta property="og:description" content="Full Stack Developer specializing in Laravel, React, and modern web technologies. Building scalable web applications with clean code and innovative solutions.">
        <meta property="og:image" content="{{ asset('images/diogo1024x1024.png') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="Diogo Marques - Full Stack Developer">
        <meta property="twitter:description" content="Full Stack Developer specializing in Laravel, React, and modern web technologies. Building scalable web applications with clean code and innovative solutions.">
        <meta property="twitter:image" content="{{ asset('images/diogo1024x1024.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.tsx', "resources/js/Pages/{$page['component']}.tsx"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
