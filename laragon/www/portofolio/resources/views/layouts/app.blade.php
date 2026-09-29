<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>@yield('title', 'Homepage | Atom Template')</title>

    <meta property="og:title" content="@yield('og_title', 'Homepage | Atom Template')" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="description" content="@yield('description', 'Portofolio & blog pribadi')" />
    <meta name="theme-color" content="#5540af" />

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    {{-- Fonts --}}
    <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect" />
    <link as="style"
          href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
          rel="preload" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
          rel="stylesheet" />

    {{-- Boxicons --}}
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    {{-- Styles Template Atom (pre-compiled) --}}
    <link crossorigin="anonymous"
          href="{{ asset('assets/styles/main.min.css') }}"
          media="screen"
          rel="stylesheet" />

    {{-- Alpine.js (diperlukan untuk interaksi navbar) --}}
    <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('styles')
</head>

<body :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
      class="relative"
      x-data="{ mobileMenu: false }">

    <div id="main" class="relative">
        {{-- Navbar --}}
        @include('partials.navbar')

        {{-- Mobile Menu Overlay --}}
        @include('partials.mobile-menu')

        {{-- Konten utama setiap halaman --}}
        @yield('content')

        {{-- Footer --}}
        @include('partials.footer') 
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>