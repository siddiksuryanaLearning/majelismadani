<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    {{-- meta --}}
    {{-- <meta property="og:site_name" content="Madrasah Karya Madani">
    <meta property="og:title"
        content="Peresmian Masjid Al-Muttaqien Madrasah Karya Madani dan Gerakan Shodaqoh Biaya Pendidikan">
    <meta property="og:description" content="Silturahmi Akbar">
    <meta property="og:image" itemprop="image"
        content="https://sidiksuryanass.files.wordpress.com/2023/07/safeimagekit-resized-img-1.png">
    <meta property="og:type" content="website">
    <meta property="og:image:type" content="image/png">
    <meta property="og:url" content="https://daftar.majelismadani.id/"> --}}
    {{-- end meta --}}
    <meta name="description"
        content="Peresmian Masjid Al-Muttaqien Madrasah Karya Madani dan Gerakan Shodaqoh Biaya Pendidikan">
    <link rel="canonical" href="https://daftar.majelismadani.id/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="SILATURAHMI AKBAR">
    <meta property="og:description"
        content="Peresmian Masjid Al-Muttaqien Madrasah Karya Madani dan Gerakan Shodaqoh Biaya Pendidikan">
    <meta property="og:url" content="https://daftar.majelismadani.id/>
    <meta property="og:site_name"
        content="Moota.co">
    <meta property="article:publisher" content="https://daftar.majelismadani.id/">
    <meta property="article:modified_time" content="2022-11-25T09:13:17+00:00">
    <meta property="og:image" content="https://sidiksuryanass.files.wordpress.com/2023/07/img_meta.png">
    <meta property="og:image:width" content="586">
    <meta property="og:image:height" content="586">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:label1" content="Est. reading time">
    <meta name="twitter:data1" content="16 minutes">



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
    <script>
        document.getElementById('btnCopy').addEventListener('click', function() {
            var textToCopy = '7167797789'; // Ganti dengan teks yang ingin Anda salin

            var tempInput = document.createElement('input');
            tempInput.setAttribute('value', textToCopy);
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);

            alert('Nomor Rekening disalin!');
        });
    </script>
</body>

</html>
