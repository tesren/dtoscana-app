<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>D'Toscana - {{ __('Sitio web en construcción') }}</title>
        <meta name="description" content="{{ __('Sitio web en construcción') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css'])

        @include('components.favicon')

        <style>
            .construction-hero {
                min-height: 100vh;
                background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url("{{ asset('img/tower-lucca.webp') }}");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>

    <body class="construction-hero d-flex align-items-center justify-content-center text-white">
        <div class="text-center px-4">
            <img src="{{ asset('img/dtoscana-logo-white.svg') }}" alt="Logo D'Toscana" class="mb-4" style="max-width: 220px;">
            <h1 class="ff-spartan text-uppercase mb-2">{{ __('Sitio web en construcción') }}</h1>
            <p class="fs-5 mb-0">{{ __('Muy pronto estaremos de vuelta.') }}</p>
        </div>
    </body>
</html>
