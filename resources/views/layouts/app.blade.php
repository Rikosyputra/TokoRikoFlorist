<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riko Florist - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   <!-- ... meta tags lainnya ... -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <!-- Atau jika menggunakan Laravel Mix -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   @yield('styles')
</head>

<body>
    <!-- Navigation -->
    @include('partials.navbar')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('partials.footer')
    
    <!-- Scripts -->
    @yield('scripts')
</body>

</html>