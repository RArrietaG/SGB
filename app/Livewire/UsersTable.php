<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{


    public string $search = '';

    use WithPagination;
    public function render()
    {

        $users = User::where('name','like','%' . $this->search . '%')
            ->latest()
            ->paginate(6);

        return view('livewire.users-table',['users' => $users]);
    }


}
