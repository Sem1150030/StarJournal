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
    <section id="posts" class="max-w-6xl mx-auto px-6 py-16">
        <div class="flex items-center justify-between mb-10">
            <div>
                <h2 class="font-display text-3xl text-slate-900 mb-2">Latest Posts</h2>
                <p class="text-slate-500">Fresh stories from our community</p>
            </div>
            <a href="#" class="text-violet-600 hover:text-violet-500 font-medium transition-colors flex items-center gap-2">
                View all
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Blog post card --}}
            <article class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                <a href="#" class="block overflow-hidden">
                    <img src="https://picsum.photos/seed/star1/600/400" alt="Post image" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                </a>
                <div class="p-5 space-y-3">
                    <span class="text-violet-600 text-xs font-medium uppercase tracking-wider">Technology</span>
                    <h3 class="text-xl font-semibold text-slate-800 group-hover:text-violet-600 transition-colors">
                        <a href="#">Getting Started with StarJournal</a>
                    </h3>
                    <p class="text-slate-400 text-sm">{{ date('F j, Y') }}</p>
                </div>
            </article>

            {{-- Blog post card --}}
            <article class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                <a href="#" class="block overflow-hidden">
                    <img src="https://picsum.photos/seed/star2/600/400" alt="Post image" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                </a>
                <div class="p-5 space-y-3">
                    <span class="text-emerald-600 text-xs font-medium uppercase tracking-wider">Writing</span>
                    <h3 class="text-xl font-semibold text-slate-800 group-hover:text-violet-600 transition-colors">
                        <a href="#">Tips for Writing Great Blog Posts</a>
                    </h3>
                    <p class="text-slate-400 text-sm">{{ date('F j, Y') }}</p>
                </div>
            </article>

            {{-- Blog post card --}}
            <article class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                <a href="#" class="block overflow-hidden">
                    <img src="https://picsum.photos/seed/star3/600/400" alt="Post image" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                </a>
                <div class="p-5 space-y-3">
                    <span class="text-amber-600 text-xs font-medium uppercase tracking-wider">Inspiration</span>
                    <h3 class="text-xl font-semibold text-slate-800 group-hover:text-violet-600 transition-colors">
                        <a href="#">Exploring New Ideas Every Day</a>
                    </h3>
                    <p class="text-slate-400 text-sm">{{ date('F j, Y') }}</p>
                </div>
            </article>

            {{-- Blog post card --}}
            <article class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                <a href="#" class="block overflow-hidden">
                    <img src="https://picsum.photos/seed/star4/600/400" alt="Post image" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                </a>
                <div class="p-5 space-y-3">
                    <span class="text-rose-600 text-xs font-medium uppercase tracking-wider">Lifestyle</span>
                    <h3 class="text-xl font-semibold text-slate-800 group-hover:text-violet-600 transition-colors">
                        <a href="#">Building a Daily Writing Habit</a>
                    </h3>
                    <p class="text-slate-400 text-sm">{{ date('F j, Y') }}</p>
                </div>
            </article>

            {{-- Blog post card --}}
            <article class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                <a href="#" class="block overflow-hidden">
                    <img src="https://picsum.photos/seed/star5/600/400" alt="Post image" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                </a>
                <div class="p-5 space-y-3">
                    <span class="text-cyan-600 text-xs font-medium uppercase tracking-wider">Creativity</span>
                    <h3 class="text-xl font-semibold text-slate-800 group-hover:text-violet-600 transition-colors">
                        <a href="#">The Art of Storytelling</a>
                    </h3>
                    <p class="text-slate-400 text-sm">{{ date('F j, Y') }}</p>
                </div>
            </article>

            {{-- Blog post card --}}
            <article class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                <a href="#" class="block overflow-hidden">
                    <img src="https://picsum.photos/seed/star6/600/400" alt="Post image" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
                </a>
                <div class="p-5 space-y-3">
                    <span class="text-violet-600 text-xs font-medium uppercase tracking-wider">Community</span>
                    <h3 class="text-xl font-semibold text-slate-800 group-hover:text-violet-600 transition-colors">
                        <a href="#">Connect with Fellow Writers</a>
                    </h3>
                    <p class="text-slate-400 text-sm">{{ date('F j, Y') }}</p>
                </div>
            </article>
        </div>
    </section>

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
