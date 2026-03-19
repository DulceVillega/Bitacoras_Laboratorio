<header class="bg-gradient-to-r from-blue-800 via-blue-700 to-indigo-800 shadow-lg">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center h-20">

            <!-- Logo + nombre -->
            <div class="flex items-center gap-3">

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

            </div>

            <!-- Menú -->
            <nav class="flex items-center gap-8 text-white font-medium">

                <a href="/"
                   class="hover:text-blue-200 transition duration-300">
                    Inicio
                </a>

                <a href="{{ route('login') }}"
                   class="hover:text-blue-200 transition duration-300">
                    Iniciar sesión
                </a>

                <a href="{{ route('register') }}"
                   class="bg-white text-blue-700 px-5 py-2 rounded-lg shadow
                   hover:bg-gray-200 transition duration-300">
                    Registrarse
                </a>

            </nav>

        </div>

    </div>

</header>