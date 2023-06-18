<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Kontak</title>

    {{-- Vendor --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    @include('components.navbar')

    <main class="flex-shrink-0">
        @yield('section')
    </main>

    {{-- JS --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    @yield('script')
</body>

</html>
