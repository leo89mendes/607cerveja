<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>607 Cerveja Artesanal</title>
        <meta name="keywords" content="Cerveja, Cerveja Artesanal, 607 Cerveja">
        <meta name="description" content="A 607 foi criada da vontade de tomar boas cervejas e oferecer produtos de qualidade para amigos, que viraram clientes. Ainda com a produção totalmente artesanal continuamos com a ideia de produzir cerveja com amor e os melhores insumos para levar até vocês a melhor cerveja. Bom apetite!">
        <meta name="author" content="Dreams Into Codes">
        <meta property="og:type" content="website">
        <meta property="og:title" content="607 Cerveja Artesanal">
        <meta property="og:description" content="A 607 foi criada da vontade de tomar boas cervejas e oferecer produtos de qualidade para amigos, que viraram clientes. Ainda com a produção totalmente artesanal continuamos com a ideia de produzir cerveja com amor e os melhores insumos para levar até vocês a melhor cerveja. Bom apetite!">
        <meta property="og:url" content="{{ url('/')}}">
        <meta property="og:image" content="{{ asset('storage/assets/img/theme.png') }}">
        <!-- <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/favicon.ico') }}"> -->

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase:wght@400;700&family=Hepta+Slab:wght@1..900&display=swap" rel="stylesheet">

        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body id="body" class="antialiased !overflow-x-hidden bg-black" style="background-image: url('storage/assets/img/bg.jpg')">
        {{ $slot }}

        @livewire('notifications')

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
