<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>@yield('title', 'Blog') | {{ config('app.name', 'Portofolio') }}</title>
    <meta name="description" content="@yield('description', 'Blog pribadi')" />
    <meta name="theme-color" content="#5540af" />

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet" />

    {{-- Boxicons --}}
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    {{-- Style Template Atom --}}
    <link href="{{ asset('assets/styles/main.min.css') }}" rel="stylesheet" />

    @stack('styles')
</head>

<body class="relative bg-white">

    <div id="main" class="relative">

        {{-- Navbar versi blog (background solid) --}}
<div class="w-full z-50 top-0 py-3 sm:py-5 bg-primary">
    <div class="container flex items-center justify-between">
        <div>
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo.svg') }}" class="w-24 lg:w-48" alt="logo" />
            </a>
        </div>

        {{-- Menu desktop --}}
        <div class="hidden lg:block">
            <ul class="flex items-center">
                <li class="group pl-6">
                    <a href="{{ url('/') }}"
                       class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white hover:text-yellow">
                        Home
                    </a>
                </li>
                <li class="group pl-6">
                    <a href="{{ route('blog.index') }}"
                       class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-yellow">
                        Blog
                    </a>
                </li>
                <li class="group pl-6">
                    <a href="{{ url('/#portfolio') }}"
                       class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white hover:text-yellow">
                        Portfolio
                    </a>
                </li>
                <li class="group pl-6">
                    <a href="{{ url('/#contact') }}"
                       class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white hover:text-yellow">
                        Contact
                    </a>
                </li>
            </ul>
        </div>

        {{-- Menu mobile --}}
        <div class="block lg:hidden">
            <a href="{{ url('/') }}">
                <i class="bx bx-home text-3xl text-white"></i>
            </a>
        </div>
    </div>
</div>

        {{-- Header halaman blog --}}
        <div class="bg-primary pt-6 pb-16 sm:pt-8 sm:pb-20">
            <div class="container text-center">
                <h1 class="font-header text-3xl font-semibold uppercase text-white sm:text-4xl lg:text-5xl">
                    @yield('page-title', 'Blog')
                </h1>
                <p class="pt-3 font-body text-base text-grey-50 sm:text-lg">
                    @yield('page-subtitle', 'Catatan, tutorial, dan pengalaman')
                </p>
            </div>
        </div>

        {{-- Konten utama --}}
        <main class="container -mt-10 mb-16">
            <div class="mx-auto w-full rounded bg-white p-6 shadow-lg sm:p-10 lg:w-11/12 xl:w-4/5">
                @yield('content')
            </div>
        </main>

        {{-- Footer --}}
        @include('partials.footer')

    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>