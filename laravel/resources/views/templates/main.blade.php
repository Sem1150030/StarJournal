<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'StarJournal' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="min-h-screen flex flex-col bg-gray-100 text-gray-900">
    <header class="bg-white shadow">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="text-xl font-bold text-indigo-600">StarJournal</a>
                <div class="flex items-center space-x-4">
                    <a href="/" class="text-gray-600 hover:text-indigo-600">Home</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8">
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-white border-t mt-auto">
        <div class="container mx-auto px-4 py-4 text-center text-gray-500">
            &copy; {{ date('Y') }} StarJournal. All rights reserved.
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

