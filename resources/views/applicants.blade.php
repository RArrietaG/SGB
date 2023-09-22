<x-app-layout>
    @section('title', 'SGB | Listado de solicitantes')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Solicitantes de libros') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('applicant-list')
            </div>
        </div>
    </div>
    <x-footer/>
</x-app-layout>
