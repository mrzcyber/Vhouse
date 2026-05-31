<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Dynamic Title -->
    <title>{{ $title ?? 'VHouse - Premium & Luxury Real Estate' }}</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ $description ?? 'Discover premium residences crafted with elegance, comfort, and timeless design. Find your dream luxury house with VHouse.' }}">
    <meta name="keywords" content="{{ $keywords ?? 'VHouse, luxury house, premium residences, real estate, luxury living, property agent' }}">
    <meta name="author" content="VHouse">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="{{ $title ?? 'VHouse - Premium & Luxury Real Estate' }}">
    <meta property="og:description" content="{{ $description ?? 'Discover premium residences crafted with elegance, comfort, and timeless design. Find your dream luxury house with VHouse.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/hero-bg.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta property="twitter:title" content="{{ $title ?? 'VHouse - Premium & Luxury Real Estate' }}">
    <meta property="twitter:description" content="{{ $description ?? 'Discover premium residences crafted with elegance, comfort, and timeless design. Find your dream luxury house with VHouse.' }}">
    <meta property="twitter:image" content="{{ $ogImage ?? asset('images/hero-bg.png') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js (for Navbar interactions) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Additional Styles/Header Stack -->
    @stack('styles')
</head>
<body class="font-sans antialiased  min-h-screen flex flex-col">
    <x-navbar />
    
    <!-- Main Content Slot -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer />
    
    <!-- Additional Scripts Stack -->
    @stack('scripts')
</body>
</html>
