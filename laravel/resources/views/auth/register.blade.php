@extends('templates.main')

@section('content')
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-violet-100 via-transparent to-fuchsia-100"></div>
        <div class="max-w-6xl mx-auto px-6 py-24 relative">
            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="text-center mb-8">
                        <span class="text-3xl mb-4 block">✦</span>
                        <h1 class="font-display text-3xl text-slate-900 mb-2">Create Account</h1>
                        <p class="text-slate-500">Join the StarJournal community</p>
                    </div>

                    <form method="POST" action="{{ route('register.store') }}" class="space-y-6">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Full Name</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20 outline-none transition-all @error('name') border-red-500 @enderror"
                                placeholder="John Doe"
                            >
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20 outline-none transition-all @error('email') border-red-500 @enderror"
                                placeholder="you@example.com"
                            >
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                required
                                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20 outline-none transition-all @error('password') border-red-500 @enderror"
                                placeholder="••••••••"
                            >
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-slate-700 mb-2">Confirm Password</label>
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                required
                                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20 outline-none transition-all"
                                placeholder="••••••••"
                            >
                        </div>

                        <button type="submit" class="w-full bg-violet-600 hover:bg-violet-500 text-white px-6 py-3 rounded-full font-medium transition-all hover:shadow-lg hover:shadow-violet-500/25">
                            Create Account
                        </button>
                    </form>

                    <div class="mt-8 text-center">
                        <p class="text-slate-500 text-sm">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-violet-600 hover:text-violet-500 font-medium transition-colors">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

