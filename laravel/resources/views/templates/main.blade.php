<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'StarJournal' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-slate-50 text-slate-900">
    <header class="border-b border-slate-200 backdrop-blur-sm bg-white/80 sticky top-0 z-50">
        <nav class="max-w-6xl mx-auto px-6 py-5">
            <div class="flex items-center justify-between">
                <a href="{{ route('index') }}" class="flex items-center space-x-2">
                    <span class="text-2xl">✦</span>
                    <span class="text-xl font-semibold tracking-tight text-slate-900">StarJournal</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('index') }}" class="text-slate-600 hover:text-violet-600 transition-colors">Home</a>
                    <a href="{{ route('about') }}" class="text-slate-600 hover:text-violet-600 transition-colors">About</a>
                    <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors">Sign in</a>
                    <a href="#" class="bg-violet-600 hover:bg-violet-500 text-white px-4 py-2 rounded-full text-sm font-medium transition-colors">
                        Get Started
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow">
        @if (session('success'))
            <div class="max-w-6xl mx-auto px-6 mt-6">
                <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-lg">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="max-w-6xl mx-auto px-6 mt-6">
                <div class="p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg">
                    {{ session('error') }}
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="border-t border-slate-200 mt-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <a href="{{ route('index') }}" class="flex items-center space-x-2 mb-4">
                        <span class="text-2xl">✦</span>
                        <span class="text-xl font-semibold tracking-tight text-slate-900">StarJournal</span>
                    </a>
                    <p class="text-slate-500 text-sm max-w-sm">
                        A place for writers and thinkers to share their stories with the world. Join our community today.
                    </p>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-slate-700 uppercase tracking-wider mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('index') }}" class="text-slate-500 hover:text-violet-600 text-sm transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-500 hover:text-violet-600 text-sm transition-colors">About Us</a></li>
                        <li><a href="#" class="text-slate-500 hover:text-violet-600 text-sm transition-colors">All Posts</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-slate-700 uppercase tracking-wider mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-slate-500 hover:text-violet-600 text-sm transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-slate-500 hover:text-violet-600 text-sm transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="text-slate-500 hover:text-violet-600 text-sm transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-200 mt-10 pt-6 text-center">
                <p class="text-slate-400 text-sm">&copy; {{ date('Y') }} StarJournal. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

