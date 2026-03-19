<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar Laboratorio
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-xl rounded-2xl p-8">

                <!-- Botón regresar -->
                <a href="{{ url('/admin/laboratorios') }}"
                    class="inline-block mb-6 bg-gray-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-600 transition">
                    ← Regresar
                </a>

                <!-- Formulario -->
                <form action="{{ route('admin.laboratorios.store') }}" method="POST">
                    @csrf

                    <!-- Nombre -->
                    <div class="mb-5">
                        <label class="block text-gray-700 font-semibold mb-2">
                            Nombre
                        </label>

                        <input type="text" name="nombre"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Ej. Laboratorio 1" required>
                    </div>

                    <!-- Ubicación -->
                    <div class="mb-5">
                        <label class="block text-gray-700 font-semibold mb-2">
                            Ubicación
                        </label>

                        <input type="text" name="ubicacion"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Ej. Edificio A">
                    </div>

                    <!-- Estado -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">
                            Estado
                        </label>

                        <select name="estado"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>

                    <!-- Botón -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                            Guardar
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>