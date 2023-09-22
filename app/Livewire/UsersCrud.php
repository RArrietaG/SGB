<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
class UsersCrud extends Component
{
    public $users;
    public $user;
    public $name;
    public $email;
    public $selectedUserId;
    public $isOpen = false;

    public $query;
    public string $search ='';


    use WithPagination;
    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email','like','%' . $this->email . '%')
                    ->paginate(5);
        $this->$users = $users->items();
        return view('livewire.users-crud',compact('users'));
    }

 /*   public function render()
    {
        $this->users = User::all();
        return view('livewire.users-crud');
    }

 */

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->resetInputFields();
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->selectedUserId = null;
    }

    public function edit($id)
    {
        $user = User::find($id);
        $this->selectedUserId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->openModal();
    }

    public function create()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        User::updateOrCreate(['id' => $this->selectedUserId], [
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('message', $this->selectedUserId ? 'Usuario actualizado correctamente.' : 'Usuario creado correctamente.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Usuario eliminado correctamente.');
    }
}
