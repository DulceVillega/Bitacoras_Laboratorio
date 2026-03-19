<nav x-data="{ open: false }" class="bg-gradient-to-r from-blue-700 to-indigo-800 shadow-md">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo y nombre del sistema -->
            <div class="flex items-center gap-4">
                <!-- Logo + nombre -->
                <div class="bg-white text-blue-700 p-2 rounded-lg shadow">
                    
                </div>

                <div class="text-white">

                    <h1 class="font-bold text-lg leading-none">
                        Sistema de Bitácoras
                    </h1>

                    <p class="text-xs text-blue-200">
                        Laboratorio de Cómputo
                    </p>

                </div>


                <!-- Links -->
                <div class="hidden sm:flex space-x-6 ml-6">

                    <a href="/admin"
                       class="text-white hover:text-blue-200 font-medium transition">
                        Dashboard
                    </a>

                    <a href="{{ route('usuarios.index') }}"
                       class="text-white hover:text-blue-200 font-medium transition">
                        Usuarios
                    </a>

                    <a href="#"
                       class="text-white hover:text-blue-200 font-medium transition">
                        Bitácoras
                    </a>

                    <a href="#"
                       class="text-white hover:text-blue-200 font-medium transition">
                        Reportes
                    </a>

                </div>
            </div>


            <!-- Usuario -->
            <div class="hidden sm:flex sm:items-center">

                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <button class="flex items-center gap-2 text-white hover:text-blue-200 transition">

                            <span class="font-medium">
                                {{ ucfirst(Auth::user()->rol) }}
                            </span>

                            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10
                                    10.586l3.293-3.293a1 1 0
                                    111.414 1.414l-4 4a1 1 0
                                    01-1.414 0l-4-4a1 1 0
                                    010-1.414z"
                                    clip-rule="evenodd"/>
                            </svg>

                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <x-dropdown-link :href="route('profile.edit')">
                            Perfil
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                Cerrar sesión
                            </x-dropdown-link>
                        </form>

                    </x-slot>

                </x-dropdown>

            </div>


            <!-- Botón móvil -->
            <div class="flex items-center sm:hidden">

                <button @click="open = ! open"
                    class="text-white hover:text-gray-200">

                    <svg class="h-6 w-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path :class="{'hidden': open, 'inline-flex': ! open }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"/>

                        <path :class="{'hidden': ! open, 'inline-flex': open }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"/>

                    </svg>

                </button>

            </div>

        </div>
    </div>


    <!-- Menú responsive -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-indigo-800">

        <div class="px-4 pt-2 pb-3 space-y-2">

            <a href="{{ route('dashboard') }}"
               class="block text-white hover:text-blue-200">
                Dashboard
            </a>

            <a href="{{ route('usuarios.index') }}"
               class="block text-white hover:text-blue-200">
                Usuarios
            </a>

            <a href="#"
               class="block text-white hover:text-blue-200">
                Bitácoras
            </a>

            <a href="#"
               class="block text-white hover:text-blue-200">
                Reportes
            </a>

        </div>

    </div>

</nav>