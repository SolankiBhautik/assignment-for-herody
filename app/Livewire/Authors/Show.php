<?php

namespace App\Livewire\Authors;

use App\Models\Author;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Show extends Component
{
    public Author $author;

    public function mount(Author $author)
    {
        $this->author = $author;
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.authors.show', [
            'books' => $this->author->books()->orderBy('title')->get()
        ]);
    }
}
