<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Mis Solicitudes
    </h2>
</x-slot>

<div class="py-10">
    <div class="max-w-6xl mx-auto">

        <div class="bg-white shadow-xl rounded-2xl p-6">

            <!-- Botón regresar -->
            <a href="{{ url('/profesor') }}"
                class="inline-block mb-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                ← Regresar
            </a>

            <!-- Tabla -->
            <table class="w-full border rounded-lg overflow-hidden">

                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Software</th>
                        <th class="p-3 text-left">Laboratorio</th>
                        <th class="p-3 text-left">Fecha</th>
                        <th class="p-3 text-left">Estado</th>
                        <th class="p-3 text-left">Comentario</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($solicitudes as $sol)

                        <tr class="border-t hover:bg-gray-50">

                            <td class="p-3">{{ $sol->software }}</td>

                            <td class="p-3">
                                {{ $sol->idlab }}
                            </td>

                            <td class="p-3">
                                {{ $sol->fecsolicitud }}
                            </td>

                            <td class="p-3">
                                <span class="text-yellow-600 font-semibold">
                                    {{ $sol->estado }}
                                </span>
                            </td>

                            <td class="p-3">
                                {{ $sol->comentario }}
                            </td>

                        </tr>

                    @empty
                        <tr>
                            <td colspan="5" class="text-center p-4 text-gray-500">
                                No tienes solicitudes registradas
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>

    </div>
</div>

</x-app-layout>