<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryBook extends Component
{
    public string $search = '';

    use WithPagination;
    public function render()
    {
        $categories = Category::where('name','like','%'. $this->search. '%')
            ->latest()
            ->paginate(5);
        return view('livewire.category-book', ['categories' => $categories]);
    }
}
