<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title>@yield('title', 'Admin') | {{ config('app.name') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/styles/main.min.css') }}" rel="stylesheet" />

    @stack('styles')
</head>

<body class="bg-grey-50 font-body">

    {{-- Navbar Admin --}}
    <div class="bg-primary">
        <div class="container flex items-center justify-between py-4">
            <a href="{{ route('admin.posts.index') }}" class="font-header text-xl font-bold uppercase text-white">
                Admin Panel
            </a>
            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}" target="_blank"
                   class="font-header text-sm font-semibold uppercase text-white hover:text-yellow">
                    <i class="bx bx-link-external"></i> Lihat Situs
                </a>
            </div>
        </div>
    </div>

    <div class="container py-8">

        {{-- Flash Message --}}
        @if(session('success'))
            <div class="mb-6 flex items-center justify-between rounded-lg border-l-4 border-green-500 bg-green-50 p-4 text-green-800">
                <span>{{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" class="text-green-800">
                    <i class="bx bx-x text-xl"></i>
                </button>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-6 flex items-center justify-between rounded-lg border-l-4 border-red-500 bg-red-50 p-4 text-red-800">
                <span>{{ session('error') }}</span>
                <button onclick="this.parentElement.remove()" class="text-red-800">
                    <i class="bx bx-x text-xl"></i>
                </button>
            </div>
        @endif

        {{-- Konten --}}
        @yield('content')

    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>