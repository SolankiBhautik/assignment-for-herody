<?php

namespace App\Livewire;

use App\Models\Author;
use App\Models\Book;
use Livewire\Component;

class Chatbot extends Component
{
    public string $message = '';
    public array $conversation = [];
    public bool $isOpen = false;

    public function sendMessage()
    {
        if (empty($this->message)) {
            return;
        }

        $question = strtolower(trim($this->message));
        $response = match(true) {
            str_contains($question, 'how many authors') => $this->getAuthorsCount(),
            str_contains($question, 'how many books') => $this->getBooksCount(),
            str_contains($question, 'top 5 authors') => $this->getTopAuthors(),
            default => "I can help you with these queries: 
                       \n- How many authors are there?
                       \n- How many books are available?
                       \n- List top 5 authors."
        };

        $this->conversation[] = [
            'question' => $this->message,
            'answer' => $response
        ];

        $this->message = '';
    }

    private function getAuthorsCount(): string
    {
        $count = Author::count();
        return "There are {$count} authors in the library.";
    }

    private function getBooksCount(): string
    {
        $count = Book::count();
        return "There are {$count} books available in the library.";
    }

    private function getTopAuthors(): string
    {
        $topAuthors = Author::withCount('books')
            ->orderByDesc('books_count')
            ->take(5)
            ->get();

        if ($topAuthors->isEmpty()) {
            return "No authors found.";
        }

        $response = "Top 5 authors by number of books:\n";
        foreach ($topAuthors as $author) {
            $response .= "\n- {$author->name} ({$author->books_count} books)";
        }

        return $response;
    }

    public function toggleChat()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('livewire.chatbot');
    }
}
