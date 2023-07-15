<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    {{-- meta --}}
    <meta property="og:site_name" content="Madrasah Karya Madani">
    <meta property="og:title"
        content="Peresmian Masjid Al-Muttaqien Madrasah Karya Madani dan Gerakan Shodaqoh Biaya Pendidikan">
    <meta property="og:description" content="Silturahmi Akbar">
    <meta property="og:image" itemprop="image"
        content="https://sidiksuryanass.files.wordpress.com/2023/07/safeimagekit-resized-img-1.png">
    <meta property="og:type" content="website">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:url" content="https://daftar.majelismadani.id/">
    {{-- end meta --}}

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>

<body class="antialiased">
    @yield('body')
    {{ $slot ?? '' }}

    @livewire('notifications')
</body>

</html>
