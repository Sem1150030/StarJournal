@extends('templates.main')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to StarJournal</h1>
            <p class="text-xl text-gray-600">Share your stories with the world</p>
        </div>

        <div class="mb-8 flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-700">Latest Posts</h2>
            <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                Write a Post
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Blog post card --}}
            <article class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                <a href="#">
                    <img src="https://picsum.photos/seed/post1/400/250" alt="Post image" class="w-full h-48 object-cover">
                </a>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        <a href="#" class="hover:text-indigo-600">Getting Started with StarJournal</a>
                    </h3>
                    <p class="text-sm text-gray-500">{{ date('F j, Y') }}</p>
                </div>
            </article>

            {{-- Blog post card --}}
            <article class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                <a href="#">
                    <img src="https://picsum.photos/seed/post2/400/250" alt="Post image" class="w-full h-48 object-cover">
                </a>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        <a href="#" class="hover:text-indigo-600">Tips for Writing Great Blog Posts</a>
                    </h3>
                    <p class="text-sm text-gray-500">{{ date('F j, Y') }}</p>
                </div>
            </article>

            {{-- Blog post card --}}
            <article class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                <a href="#">
                    <img src="https://picsum.photos/seed/post3/400/250" alt="Post image" class="w-full h-48 object-cover">
                </a>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        <a href="#" class="hover:text-indigo-600">Exploring New Ideas</a>
                    </h3>
                    <p class="text-sm text-gray-500">{{ date('F j, Y') }}</p>
                </div>
            </article>
        </div>
    </div>
@endsection
