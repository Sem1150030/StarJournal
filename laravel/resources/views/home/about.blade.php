@extends('templates.main')

@section('content')
    {{-- Hero Section --}}
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-violet-100 via-transparent to-fuchsia-100"></div>
        <div class="max-w-6xl mx-auto px-6 py-20 relative">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block text-violet-600 text-sm font-medium tracking-wider uppercase mb-4">About Us</span>
                <h1 class="font-display text-5xl md:text-6xl text-slate-900 mb-6 leading-tight">
                    Our Story
                </h1>
                <p class="text-slate-600 text-lg md:text-xl max-w-2xl mx-auto">
                    We're building a home for writers, dreamers, and storytellers from all walks of life.
                </p>
            </div>
        </div>
    </section>

    {{-- Mission Section --}}
    <section class="max-w-6xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-violet-600 text-sm font-medium uppercase tracking-wider">Our Mission</span>
                <h2 class="font-display text-3xl md:text-4xl text-slate-900 mt-2 mb-6">
                    Empowering Voices Everywhere
                </h2>
                <p class="text-slate-600 mb-4">
                    StarJournal was founded in 2024 with a simple mission: to give everyone a platform to share their stories. We believe that every voice matters and every story deserves to be heard.
                </p>
                <p class="text-slate-600 mb-4">
                    Whether you're a seasoned writer or just starting your journey, StarJournal provides the tools and community you need to express yourself and connect with readers around the world.
                </p>
                <p class="text-slate-600">
                    Our platform is built on the principles of openness, creativity, and respect. We're committed to fostering a welcoming environment where ideas can flourish.
                </p>
            </div>
            <div class="relative">
                <img src="https://picsum.photos/seed/about1/600/500" alt="Our team working" class="rounded-2xl shadow-lg w-full object-cover">
            </div>
        </div>
    </section>

    {{-- Values Section --}}
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-violet-600 text-sm font-medium uppercase tracking-wider">What We Believe</span>
                <h2 class="font-display text-3xl md:text-4xl text-slate-900 mt-2">Our Core Values</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-violet-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-800 mb-2">Amplify Voices</h3>
                    <p class="text-slate-500">We give every writer a platform to share their unique perspective with the world.</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-800 mb-2">Build Community</h3>
                    <p class="text-slate-500">We foster connections between writers and readers who share common interests.</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-amber-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-800 mb-2">Inspire Creativity</h3>
                    <p class="text-slate-500">We encourage experimentation and creative expression in all forms of writing.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Team Section --}}
    <section class="max-w-2xl mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <span class="text-violet-600 text-sm font-medium uppercase tracking-wider">The Team</span>
            <h2 class="font-display text-3xl md:text-4xl text-slate-900 mt-2">Meet the Developer Behind StarJournal</h2>
        </div>
        <div>
            <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
                <img src="https://picsum.photos/seed/team1/200/200" alt="Team member" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-lg font-semibold text-slate-800">Sem Star</h3>
                <p class="text-violet-600 text-sm mb-3">Developer</p>
                <p class="text-slate-500 text-sm">Current developer of the site, employee of Orderchamp.</p>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="max-w-6xl mx-auto px-6 py-16">
        <div class="bg-gradient-to-r from-violet-50 to-fuchsia-50 border border-violet-100 rounded-3xl p-12 text-center">
            <h2 class="font-display text-3xl md:text-4xl text-slate-900 mb-4">Join Our Community</h2>
            <p class="text-slate-600 mb-8 max-w-xl mx-auto">
                Become part of a growing community of writers and readers who believe in the power of stories.
            </p>
            <a href="#" class="inline-block bg-violet-600 hover:bg-violet-500 text-white px-8 py-3 rounded-full font-medium transition-all hover:shadow-lg hover:shadow-violet-500/25">
                Get Started Today
            </a>
        </div>
    </section>
@endsection
