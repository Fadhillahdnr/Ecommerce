<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Admin Panel')</title>

    {{-- Bootstrap (opsional, hanya untuk komponen tertentu) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Tailwind + Alpine --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-gray-50">

    {{-- NAVBAR --}}
    @include('admin.layouts.navbar')

    {{-- CONTENT --}}
    <main class="flex-1 max-w-7xl mx-auto w-full px-4 py-6">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="border-t py-4 text-center text-sm text-gray-500">
        © {{ date('Y') }} Admin Panel
    </footer>

    {{-- SCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>
</html>
