@extends('templates.main')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-violet-50/30 to-slate-50">
        {{-- Header Section --}}
        <div class="bg-white border-b border-slate-200">
            <div class="max-w-4xl mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                    <div>
                        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                            <a href="{{ route('dashboard.index') }}" class="hover:text-violet-600 transition-colors">Dashboard</a>
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
                        <a
                            href="{{ route('journal.edit', $journal->id) }}"
                            class="inline-flex items-center gap-2 bg-violet-600 hover:bg-violet-500 text-white px-4 py-2 rounded-full text-sm font-medium transition-all"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content Section --}}
        <div class="max-w-4xl mx-auto px-6 py-10">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                {{-- Meta Info --}}
                <div class="flex items-center gap-6 text-sm text-slate-500 mb-8 pb-6 border-b border-slate-200">
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        {{ $journal->date->format('F j, Y') }}
                    </span>
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Updated {{ $journal->updated_at->diffForHumans() }}
                    </span>
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
                <a href="{{ route('journal.edit', $journal->id) }}" class="text-violet-600 hover:text-violet-500 transition-colors flex items-center gap-2">
                    Edit this entry
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection

