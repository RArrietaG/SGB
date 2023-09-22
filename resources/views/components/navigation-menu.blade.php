<div>
    <nav class="fixed-menu p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo y Nombre de la Empresa -->
            <div class="flex items-center space-x-2">
                <img class="h-16 w-auto" src="{{ asset('img/logo.png') }}" alt="Logo" class="w-10 h-10">
                <span class="text-gray-500 text-2xl font-semibold"><strong>SGB</strong></span>
            </div>

            <!-- Menú de Navegación -->
            <div x-data="{ open: false }" class="md:hidden">
                <button @click="open = !open" class="text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false" class="rounded-md bg-white absolute top-16 left-0 mt-2 py-2 w-full bg-gray-100 text-gray-800 border border-gray-300">
                    <a href="{{ route('home') }}" class="font-semibold bg-white hover:bg-gray-300 text-gray-700 block px-4 py-2 hover:text-gray-900">Inicio</a>
                    <a href="{{ route('register') }}" class="font-semibold bg-white hover:bg-gray-300 text-gray-700 block px-4 py-2 hover:text-gray-900">Registrarse</a>
                    <a href="{{ route('login') }}" class="font-semibold bg-white hover:bg-gray-300 text-gray-700 block px-4 py-2 hover:text-gray-900">Iniciar Sesión</a>
                </div>
            </div>

            <!-- Menú de Navegación para Pantallas Medianas y Grandes -->
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('home') }}" class="font-semibold text-gray-800 hover:text-gray-600">Inicio</a>
                <a href="{{ route('register') }}" class="font-semibold text-gray-800 hover:text-gray-600">Registrarse</a>
                <a href="{{ route('login') }}" class="font-semibold text-gray-800 hover:text-gray-600">Iniciar Sesión</a>
            </div>
        </div>
    </nav>
</div>
