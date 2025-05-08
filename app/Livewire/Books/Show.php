<?php

namespace App\Livewire\Books;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Show extends Component
{
    public Book $book;

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.books.show');
    }
}
