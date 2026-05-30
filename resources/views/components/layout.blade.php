<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Dynamic Title -->
    <title>{{ $title ?? config('app.name', 'Vhouse') }}</title>
    
    <!-- SEO Meta Tags -->
    @if(isset($description))
        <meta name="description" content="{{ $description }}">
    @endif
    
    @if(isset($keywords))
        <meta name="keywords" content="{{ $keywords }}">
    @endif

    <meta name="author" content="{{ $author ?? config('app.name') }}">
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="{{ $title ?? config('app.name', 'Vhouse') }}">
    @if(isset($description))
        <meta property="og:description" content="{{ $description }}">
    @endif
    @if(isset($ogImage))
        <meta property="og:image" content="{{ $ogImage }}">
    @endif

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta property="twitter:title" content="{{ $title ?? config('app.name', 'Vhouse') }}">
    @if(isset($description))
        <meta property="twitter:description" content="{{ $description }}">
    @endif
    @if(isset($ogImage))
        <meta property="twitter:image" content="{{ $ogImage }}">
    @endif
    
    <!-- Optional: Favicon -->
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

    <!-- Footer bisa ditaruh di sini jika ada -->
    
    <!-- Additional Scripts Stack -->
    @stack('scripts')
</body>
</html>
