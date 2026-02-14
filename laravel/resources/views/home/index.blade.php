@extends('templates.main')

@section('content')
    {{-- Hero Section --}}
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-violet-100 via-transparent to-fuchsia-100"></div>
        <div class="max-w-6xl mx-auto px-6 py-24 relative">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block text-violet-600 text-sm font-medium tracking-wider uppercase mb-4">Welcome to StarJournal</span>
                <h1 class="font-display text-5xl md:text-6xl lg:text-7xl text-slate-900 mb-6 leading-tight">
                    Where Stories Come to Life
                </h1>
                <p class="text-slate-600 text-lg md:text-xl mb-10 max-w-2xl mx-auto">
                    Discover inspiring stories, share your thoughts, and connect with a community of passionate writers from around the world.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button
                        onclick="Livewire.dispatch('openModal', { component: 'journal.create-journal-modal' })"
                        class="bg-violet-600 hover:bg-violet-500 text-white px-8 py-3 rounded-full font-medium transition-all hover:shadow-lg hover:shadow-violet-500/25 cursor-pointer"
                    >
                        Start Writing
                    </button>
                    <a href="#posts" class="border border-slate-300 hover:border-violet-400 text-slate-700 hover:text-violet-600 px-8 py-3 rounded-full font-medium transition-colors">
                        Explore Posts
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Latest Posts Section --}}
    @livewire('latest-posts-component')

    {{-- CTA Section --}}
    <section class="max-w-6xl mx-auto px-6 py-16">
        <div class="bg-gradient-to-r from-violet-50 to-fuchsia-50 border border-violet-100 rounded-3xl p-12 text-center">
            <h2 class="font-display text-3xl md:text-4xl text-slate-900 mb-4">Ready to Share Your Story?</h2>
            <p class="text-slate-600 mb-8 max-w-xl mx-auto">
                Join thousands of writers who are already sharing their stories on StarJournal.
            </p>
            @auth
                <a href="{{route('register')}}" class="inline-block bg-violet-600 hover:bg-violet-500 text-white px-8 py-3 rounded-full font-medium transition-all hover:shadow-lg hover:shadow-violet-500/25">
                    Write Your Post
                </a>
            @else
            <a href="{{route('register')}}" class="inline-block bg-violet-600 hover:bg-violet-500 text-white px-8 py-3 rounded-full font-medium transition-all hover:shadow-lg hover:shadow-violet-500/25">
                Create Your Account
            </a>
            @endauth
        </div>
    </section>
@endsection
