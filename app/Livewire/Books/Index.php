<?php

namespace App\Livewire\Books;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class Index extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public function render()
    {
        $books = Book::query()
            ->with('author')
            ->when($this->search, fn($query) => 
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%')
                    ->orWhereHas('author', fn($q) => 
                        $q->where('name', 'like', '%' . $this->search . '%')
                    )
            )
            ->orderBy('title')
            ->paginate(10);

        return view('livewire.books.index', [
            'books' => $books
        ]);
    }

    public function updating($field)
    {
        if ($field === 'search') {
            $this->resetPage();
        }
    }
}
