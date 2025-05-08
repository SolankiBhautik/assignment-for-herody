<?php

namespace App\Livewire\Authors;

use App\Models\Author;
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
        $authors = Author::query()
            ->when($this->search, fn($query) => 
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('bio', 'like', '%' . $this->search . '%')
            )
            ->withCount('books')
            ->orderBy('name')
            ->paginate(10);

        return view('livewire.authors.index', [
            'authors' => $authors
        ]);
    }

    public function updating($field)
    {
        if ($field === 'search') {
            $this->resetPage();
        }
    }
}
