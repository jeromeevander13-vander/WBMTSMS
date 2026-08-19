<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salonify - Free Multi-Tenant Salon Management & Booking</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="bg-gray-950 text-gray-50 antialiased selection:bg-purple-500 selection:text-white">
    <nav class="fixed w-full z-50 transition-all duration-300 bg-gray-950/80 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-purple-600 to-pink-500 flex items-center justify-center shadow-lg shadow-purple-500/20">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                    <span class="font-bold text-2xl tracking-tight text-white">Salonify</span>
                    <span class="text-xs px-2 py-0.5 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 font-medium">100% Free</span>
                </a>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#client-portal" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Book a Salon</a>
                    <a href="#salon-owner" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">For Salon Owners</a>
                    <a href="#features" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Core Features</a>
                    <div class="h-6 w-px bg-gray-800"></div>
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-300 hover:text-white transition-colors">Sign In</a>
                    <a href="{{ route('tenant.dashboard') }}" class="text-sm font-medium bg-gradient-to-r from-purple-500 to-pink-500 text-white px-5 py-2.5 rounded-full hover:opacity-90 transition-all hover:scale-105 transform shadow-lg shadow-purple-500/25">
                        Register Your Salon
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-gray-900 border-t border-white/5 py-12 mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center">
            <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-purple-600 to-pink-500 flex items-center justify-center mb-4 opacity-75">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </div>
            <p class="text-gray-400 text-sm font-medium">Salonify — Free Centralized Web-Based Multi-Tenant Salon Management Platform</p>
            <p class="text-gray-600 text-xs mt-2">Designed for Salon Owners, Staff & Clients</p>
        </div>
    </footer>
</body>
</html>
