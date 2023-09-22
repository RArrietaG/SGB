<div class="fixed z-10 inset-0 overflow-y-auto" x-show="isOpen" x-cloak>
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true" x-show="isOpen">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" x-show="isOpen" @click.away="isOpen = false" x-cloak>
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Editar/Crear Usuario
                        </h3>
                        <div class="mt-2">
                            <form wire:submit.prevent="create">
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                                    <input wire:model="name" type="text" id="name" name="name" class="w-full bg-gray-100 border border-gray-300 rounded py-2 px-3 focus:outline-none focus:border-blue-400" required>
                                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico:</label>
                                    <input wire:model="email" type="email" id="email" name="email" class="w-full bg-gray-100 border border-gray-300 rounded py-2 px-3 focus:outline-none focus:border-blue-400" required>
                                    @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                    <button @click="isOpen = false" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:border-red-700 focus:ring ring-red-300 sm:ml-3 sm:w-auto sm:text-sm">
                        Cerrar
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>
