<?php

namespace App\Livewire;

use App\Models\Author;
use Livewire\Component;
use Livewire\WithPagination;

class AuthorsCrud extends Component
{

    public string $search = '';

    use WithPagination;
    public function render()
    {
        $authors = Author::where('name', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(5);

        return view('livewire.authors-crud', ['authors' => $authors]);
    }
}
