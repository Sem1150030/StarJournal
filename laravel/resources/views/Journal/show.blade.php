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
                            <span class="text-slate-700">{{ $journal->title }}</span>
                        </nav>
                        <h1 class="font-display text-3xl text-slate-900">{{ $journal->title }}</h1>
                        @if($journal->description)
                            <p class="mt-2 text-slate-500">{{ $journal->description }}</p>
                        @endif
                    </div>
                    <div class="flex items-center gap-3">
                        @php
                            $statusColors = [
                                'draft' => 'text-amber-700 bg-amber-100',
                                'published' => 'text-emerald-700 bg-emerald-100',
                                'private' => 'text-slate-700 bg-slate-100',
                            ];
                            $statusColor = $statusColors[$journal->status] ?? 'text-slate-700 bg-slate-100';
                        @endphp
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $statusColor }}">
                            {{ ucfirst($journal->status) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content Section --}}
        <div class="max-w-4xl mx-auto px-6 py-10">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                {{-- Author Info --}}
                <div class="flex items-center gap-4 mb-6 pb-6 border-b border-slate-200">
                    <div class="w-12 h-12 rounded-full bg-violet-100 flex items-center justify-center text-violet-600 font-semibold text-lg">
                        {{ strtoupper(substr($journal->user->name, 0, 1)) }}
                    </div>
                    <div>
                        <p class="font-medium text-slate-900">{{ $journal->user->name }}</p>
                        <p class="text-sm text-slate-500">{{ $journal->date->format('F j, Y') }} · {{ $journal->updated_at->diffForHumans() }}</p>
                    </div>
                </div>

                {{-- Journal Content --}}
                <article class="prose prose-slate prose-lg max-w-none journal-content">
                    {!! $journal->content !!}
                </article>
            </div>

            {{-- Navigation --}}
            <div class="mt-8 flex items-center justify-between">
                <a href="{{ route('dashboard.index') }}" class="text-slate-600 hover:text-violet-600 transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back to Dashboard
                </a>
            </div>
        </div>
    </div>
@endsection

