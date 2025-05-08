<div class="fixed bottom-0 right-0 mb-4 mr-4 z-50">
    <!-- Chat Toggle Button -->
    <button wire:click="toggleChat" class="bg-indigo-600 text-white rounded-full p-3 shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
    </button>

    <!-- Chat Window -->
    <div x-show="$wire.isOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform scale-90"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-90"
         class="absolute bottom-16 right-0 w-96 bg-white rounded-lg shadow-xl overflow-hidden">
        <!-- Chat Header -->
        <div class="bg-indigo-600 px-4 py-3 flex justify-between items-center">
            <h3 class="text-white font-medium">LibraryBot</h3>
            <button wire:click="toggleChat" class="text-white hover:text-gray-200 focus:outline-none">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Chat Messages -->
        <div class="h-96 overflow-y-auto p-4 bg-gray-50">
            @forelse($conversation as $message)
                <!-- User Message -->
                <div class="flex justify-end mb-4">
                    <div class="bg-indigo-600 text-white rounded-lg py-2 px-4 max-w-[80%]">
                        {{ $message['question'] }}
                    </div>
                </div>
                <!-- Bot Response -->
                <div class="flex justify-start mb-4">
                    <div class="bg-white text-gray-800 rounded-lg py-2 px-4 max-w-[80%] shadow">
                        {!! nl2br(e($message['answer'])) !!}
                    </div>
                </div>
            @empty
                <div class="text-center text-gray-500 py-8">
                    Ask me about authors and books!
                    <div class="mt-2 text-sm">
                        Try:
                        <ul class="mt-1">
                            <li>- How many authors are there?</li>
                            <li>- How many books are available?</li>
                            <li>- List top 5 authors.</li>
                        </ul>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Chat Input -->
        <div class="border-t p-4 bg-white">
            <form wire:submit="sendMessage" class="flex gap-2">
                <input
                    type="text"
                    wire:model="message"
                    placeholder="Type your question..."
                    class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Send
                </button>
            </form>
        </div>
    </div>
</div>
