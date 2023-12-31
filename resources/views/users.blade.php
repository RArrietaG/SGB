<x-app-layout>
    @section('title', 'SGB | Usuarios de sistema')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios de sistema') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @livewire('users-table')
            </div>
        </div>
    </div>
    <x-footer/>
</x-app-layout>
