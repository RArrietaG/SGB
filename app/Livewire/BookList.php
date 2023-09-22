<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class BookList extends Component
{
    public string $search = '';
    use WithPagination;
    public function render()
    {
        $books = Book::where('title','like','%' . $this->search . '%')
            ->latest()
            ->paginate(5);
        return view('livewire.book-list', ['books' => $books]);
    }
}
