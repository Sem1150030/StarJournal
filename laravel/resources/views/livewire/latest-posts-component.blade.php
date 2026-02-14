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
        @foreach($this->latestPosts as $post)
        <article class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
            <a href="{{ route('journal.show', $post->id) }}" class="block overflow-hidden">
                <img src="https://picsum.photos/seed/{{ $post->id }}/600/400" alt="{{ $post->title }}" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">
            </a>
            <div class="p-5 space-y-3">
                @php
                    $statusColors = [
                        'draft' => 'text-amber-600',
                        'published' => 'text-emerald-600',
                        'private' => 'text-slate-600',
                    ];
                @endphp
                <span class="{{ $statusColors[$post->status] ?? 'text-violet-600' }} text-xs font-medium uppercase tracking-wider">{{ ucfirst($post->status) }}</span>
                <h3 class="text-xl font-semibold text-slate-800 group-hover:text-violet-600 transition-colors">
                    <a href="{{ route('journal.show', $post->id) }}">{{ $post->title }}</a>
                </h3>
                <p class="text-slate-400 text-sm">{{ $post->date->format('F j, Y') }}</p>
            </div>
        </article>
        @endforeach
    </div>
</section>
