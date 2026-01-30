<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>@yield('title')</title>
    </head>

  <body class="flex flex-col min-h-screen bg-slate-900 text-slate-100">
    @include('user.layouts.navigation')

    <main class="flex-1 w-full max-w-7xl mx-auto px-4 py-6">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('user.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>