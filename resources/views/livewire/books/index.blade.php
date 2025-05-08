<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
        <div class="mb-6">
            <h1 class="text-3xl font-semibold text-gray-900">Books</h1>
            <div class="mt-4">
                <div class="relative">
                    <input
                        type="text"
                        wire:model.live="search"
                        placeholder="Search books or authors..."
                        class="w-full pl-3 pr-10 py-2 border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    >
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul role="list" class="divide-y divide-gray-200">
                @forelse ($books as $book)
                    <li>
                        <a href="{{ route('books.show', $book) }}" class="block hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-indigo-600 truncate">
                                                {{ $book->title }}
                                            </p>
                                            <div class="ml-2 flex-shrink-0">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    {{ $book->published_year }}
                                                </span>
                                            </div>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ Str::limit($book->description, 150) }}
                                        </p>
                                        <div class="mt-2">
                                            <a href="{{ route('authors.show', $book->author) }}" class="text-xs text-gray-600 hover:text-indigo-600">
                                                By {{ $book->author->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @empty
                    <li class="px-4 py-4 sm:px-6 text-center text-gray-500">
                        No books found.
                    </li>
                @endforelse
            </ul>
        </div>

        <div class="mt-4">
            {{ $books->links() }}
        </div>
    </div>
</div>
