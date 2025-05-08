<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
        <!-- Back Button -->
        <a href="{{ route('authors.index') }}" class="inline-flex items-center mb-4 text-sm text-gray-600 hover:text-gray-900">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Authors
        </a>

        <!-- Author Details -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
            <div class="px-4 py-5 sm:px-6">
                <h1 class="text-2xl font-bold text-gray-900">{{ $author->name }}</h1>
            </div>
            <div class="border-t border-gray-200">
                <div class="px-4 py-5 sm:px-6">
                    <div class="text-gray-700">{{ $author->bio }}</div>
                </div>
            </div>
        </div>

        <!-- Books Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Books by {{ $author->name }}</h2>
            
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul role="list" class="divide-y divide-gray-200">
                    @forelse ($books as $book)
                        <li> 
                            <a href="{{ route('books.show', $book) }}" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-indigo-600 truncate">
                                                {{ $book->title }}
                                            </p>
                                            <p class="mt-2 text-sm text-gray-500">
                                                {{ Str::limit($book->description, 150) }}
                                            </p>
                                            <p class="mt-1 text-xs text-gray-400">
                                                Published in {{ $book->published_year }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @empty
                        <li class="px-4 py-4 sm:px-6 text-center text-gray-500">
                            No books found for this author.
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
