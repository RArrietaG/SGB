<div>
<div class="flex justify-between">
    <x-input type="search" wire:model.live="search" placeholder="Buscar ..." class="m-4"/>

    <button wire:click="openModal" class=" flex m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
        </svg>
        Agregar Usuario
    </button>
    <a href="{{ route('dashboard') }}">
        <button wire:click="openModal" class=" flex m-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
            Regresar
        </button>
    </a>
</div>

    @if ($isOpen)
        @include('livewire.users-crud-modal')
    @endif

    <table class="min-w-full table-auto">
        <thead>
        <tr>
            <th class="px-4 py-2">Nombre</th>
            <th class="px-4 py-2">Correo Electrónico</th>
            <th class="px-4 py-2">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $item)
            <tr>
                <td class="border px-4 py-2">{{ $item->name }}</td>
                <td class="border px-4 py-2">{{ $item->email }}</td>
                <td class="border px-4 py-2 text-center">
                    <button wire:click="edit({{ $item->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Editar</button>
                    <button wire:click="delete({{ $item->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Eliminar</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mt-4">

    </div>
</div>
