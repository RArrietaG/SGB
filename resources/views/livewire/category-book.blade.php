<div>
    <div class="flex justify-between">
        <x-input class="m-4" wire:model.live="search" type="search" placeholder="Buscar..." />
        <a class="m-4" href="{{route('dashboard')}}">
            <x-button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" mr-4 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
                Regresar
            </x-button>
        </a>
    </div>

    <table class="min-w-full table-auto">
        <thead>
        <tr>
            <th class="px-4 py-2">Categoría</th>
            <th class="px-4 py-2">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td class="border px-4 py-2">{{ $category->name }}</td>
                <td class="border px-4 py-2 text-center">
                    <a href="{{ route('author.create') }}">
                        <button wire:click="saveAuthor({{ $category->id }})" class="text-blue-600 hover:text-blue-900 mr-2 ml-2">Editar</button>
                    </a>
                    <button wire:click="edit({{ $category->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Editar</button>
                    <button wire:click="delete({{ $category->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Eliminar</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="max-w-7xl mx-auto ml-4 m-4">
        {{ $categories->links() }}
    </div>
</div>
