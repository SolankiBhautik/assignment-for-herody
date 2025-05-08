<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
        <!-- Back Button -->
        <a href="{{ route('books.index') }}" class="inline-flex items-center mb-4 text-sm text-gray-600 hover:text-gray-900">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Books
        </a>

        <!-- Book Details -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
            <div class="px-4 py-5 sm:px-6">
                <h1 class="text-2xl font-bold text-gray-900">{{ $book->title }}</h1>
                <p class="mt-1 text-sm text-gray-500">Published in {{ $book->published_year }}</p>
            </div>
            <div class="border-t border-gray-200">
                <div class="px-4 py-5 sm:px-6">
                    <div class="prose max-w-none text-gray-700">
                        {{ $book->description }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Author Information -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">About the Author</h2>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-indigo-600">
                                <a href="{{ route('authors.show', $book->author) }}" class="hover:underline">
                                    {{ $book->author->name }}
                                </a>
                            </h3>
                            <p class="mt-3 text-gray-700">
                                {{ $book->author->bio }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
