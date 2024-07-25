<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - NutriLife</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .bg-gradient-nutrilife {
            background: linear-gradient(90deg, #9333ea, #4d1d9f);
        }

        .hover-bg-gradient-nutrilife:hover {
            background: linear-gradient(90deg, #4d1d9f, #9333ea);
        }
    </style>
</head>

<body class="bg-gradient-to-r from-pink-100 to-purple-200 text-gray-900 font-sans">
    <nav class="bg-gradient-nutrilife text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="text-2xl font-bold drop-shadow-md">NutriLife</a>
            <ul class="flex items-center space-x-6">
                @if(!auth()->check())
                    <li><a href="{{ route('about') }}" class="hover:text-pink-200 transition duration-300">Nosotros</a></li>
                @endif
                @if(auth()->check())
                    <li><p class="text-lg">Bienvenido, <b>{{ auth()->user()->name }}</b></p></li>
                    <li><a href="{{ route('login.destroy') }}" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-full transition duration-300 drop-shadow-md">Cerrar Sesión</a></li>
                @else
                    <li><a href="{{ route('login.index') }}" class="hover:text-pink-200 transition duration-300">Iniciar Sesión</a></li>
                    <li><a href="{{ route('register.index') }}" class="bg-white text-purple-700 hover:bg-purple-100 py-2 px-4 rounded-full transition duration-300 drop-shadow-md">Registrarse</a></li>
                @endif
            </ul>
        </div>
    </nav>

    <div class="flex flex-col md:flex-row min-h-screen">
        @auth
            <aside class="w-full md:w-64 bg-white shadow-lg flex flex-col justify-between">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-purple-800">Menú</h2>
                </div>
                <nav class="mt-5 flex-1">
                    <ul>
                        <li class="py-2 hover:bg-purple-50 transition duration-300">
                            <a href="{{ route('citas.index') }}" class="flex items-center px-4 text-gray-700">
                                <i class="fas fa-users mr-3"></i> Citas
                            </a>
                        </li>
                        @if(auth()->user()->role === 'admin' || auth()->user()->role === 'editor')
                            <li class="py-2 hover:bg-purple-50 transition duration-300">
                                <a href="{{ route('usuarios.index') }}" class="flex items-center px-4 text-gray-700">
                                    <i class="fas fa-users-cog mr-3"></i> Gestión Usuarios
                                </a>
                            </li>
                            <li class="py-2 hover:bg-purple-50 transition duration-300">
                                <a href="{{ route('configuracion.index') }}" class="flex items-center px-4 text-gray-700">
                                    <i class="fas fa-cogs mr-3"></i> Configuración
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
                <div class="p-4 mt-auto">
                    <a href="{{ route('login.destroy') }}" class="block py-2 px-4 bg-red-500 hover:bg-red-600 text-white text-center rounded-md transition duration-300 drop-shadow-md">Salir</a>
                    <p class="text-gray-500 text-center mt-2">© 2024 NutriLife. Todos los derechos reservados.</p>
                </div>
            </aside>
        @endauth

        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>

    @if (in_array(Route::currentRouteName(), ['about', 'login.index', 'register.index']))
        <footer class="bg-purple-900 text-white py-6">
            <div class="container mx-auto px-4 text-center">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="w-full md:w-1/3 mb-6 md:mb-0">
                        <h4 class="text-2xl font-bold mb-4">NutriLife</h4>
                        <p class="text-gray-300">Promoviendo una vida saludable a través de una nutrición balanceada y estilos de vida activos.</p>
                    </div>
                    <div class="w-full md:w-1/3 mb-6 md:mb-0">
                        <nav class="flex justify-center space-x-6">
                            <a href="#" class="hover:text-pink-300 transition duration-300">Inicio</a>
                            <a href="#" class="hover:text-pink-300 transition duration-300">Acerca</a>
                            <a href="#" class="hover:text-pink-300 transition duration-300">Servicios</a>
                            <a href="#" class="hover:text-pink-300 transition duration-300">Contacto</a>
                        </nav>
                    </div>
                    <div class="w-full md:w-1/3 flex justify-center md:justify-end space-x-6">
                        <a href="#" class="text-2xl hover:text-pink-300 transition duration-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:text-pink-300 transition duration-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-2xl hover:text-pink-300 transition duration-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-pink-300 transition duration-300"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="mt-8 text-gray-400">
                    <p>&copy; 2024 NutriLife. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>
    @endif
</body>

</html>
