@extends('templates.main')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-violet-50/30 to-slate-50">
        {{-- Header Section --}}
        <div class="bg-white border-b border-slate-200">
            <div class="max-w-4xl mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                    <div>
                        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                            <a href="{{ route('index') }}" class="hover:text-violet-600 transition-colors">Home</a>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="text-slate-700">New Entry</span>
                        </nav>
                        <h1 class="font-display text-3xl text-slate-900">Create Your Journal Entry</h1>
                        <p class="mt-2 text-slate-500">Capture your thoughts, ideas, and memories.</p>
                    </div>
                    <div class="hidden md:flex items-center gap-3">
                        <div class="flex items-center gap-2 px-4 py-2 bg-violet-50 rounded-full">
                            <svg class="w-5 h-5 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm font-medium text-violet-700">{{ now()->format('F j, Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Editor Section --}}
        <div class="max-w-4xl mx-auto px-6 py-10">
            {{-- Tips Card --}}
            <div class="mb-8 p-4 bg-amber-50 border border-amber-200 rounded-xl flex items-start gap-3">
                <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
                <div>
                    <p class="text-sm font-medium text-amber-800">Writing Tip</p>
                    <p class="text-sm text-amber-700 mt-1">Take a moment to reflect on your day. What made you smile? What challenged you? What are you grateful for?</p>
                </div>
            </div>

            {{-- Journal Editor Component --}}
            @livewire('journal-editor-component', ['journal' => $journal])

            {{-- Decorative Elements --}}
            <div class="mt-8 flex items-center justify-center gap-4 text-slate-400">
                <span class="text-2xl">✦</span>
                <p class="text-sm italic">"The life of every man is a diary in which he means to write one story, and writes another."</p>
                <span class="text-2xl">✦</span>
            </div>
        </div>
    </div>
@endsection
