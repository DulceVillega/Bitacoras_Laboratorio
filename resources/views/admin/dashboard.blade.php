<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between
                    bg-gradient-to-r from-blue-600 to-indigo-700 
                    text-white p-6 rounded-xl shadow-lg">

            <!-- Título del sistema -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold flex items-center gap-2">
                    Sistema de Bitácoras de Laboratorio
                </h2>

                <p class="text-sm md:text-base text-blue-100 mt-1">
                    Registro y control de actividades realizadas en el laboratorio
                </p>
            </div>

            <!-- Información del usuario -->
            <div class="mt-4 md:mt-0 text-sm md:text-right">
                <p>
                    👤 <span class="font-semibold">{{ Auth::user()->name }}</span>
                </p>
                <p>
                    Rol: <span class="font-semibold capitalize">{{ Auth::user()->rol }}</span>
                </p>
            </div>

        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Bienvenida --}}
                    <h1 class="text-2xl font-bold mb-2">
                        Bienvenido {{ Auth::user()->name }}
                    </h1>

                    <p class="mb-6">
                        Tu rol es: <b>{{ ucfirst(Auth::user()->rol) }}</b>
                    </p>

                    {{-- Botones de gestión --}}
                    <div class="flex flex-wrap gap-4">

                        <a href="{{ route('usuarios.index') }}" 
                           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition shadow">
                            Gestionar Usuarios
                        </a>

                        <a href="#" 
                           class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition shadow">
                            Otro Botón
                        </a>

                        <a href="#" 
                           class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition shadow">
                            Más Opciones
                        </a>

                        

                        <a href="{{ url('/admin/laboratorios') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition shadow">
                            Nuevo laboratorio
                        </a>
                        <a href="{{ route('admin.solicitudes.index') }}" 
                            class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition shadow">
                            📄 Ver Solicitudes
                        </a>

                        
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>