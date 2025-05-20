<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Your App Name') }}</title>

    <!-- Fonts (optional, remove if unused) -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite assets (Tailwind, app.js) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Styles -->
    @livewireStyles
  </head>

  <body class="font-sans antialiased text-gray-900 bg-white">
    @include('layouts.guest.partials.header')
    
    @yield('content')

    {{ $slot ?? ''}}

    @include('layouts.guest.partials.footer')
    <!-- Livewire Scripts -->
    @livewireScripts
  </body>
</html>
