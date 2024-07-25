@extends('layouts.app')

@section('title', 'Gestión de Usuarios - NutriLife')

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
<<<<<<< HEAD
  <h1 class="text-5xl font-extrabold text-center text-purple-800 mb-6">
    Gestión de Usuarios
  </h1>
  <div class="w-32 h-2 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto mb-12 rounded-full"></div>
    <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl overflow-hidden">
=======
  <h1 class="text-5xl font-extrabold text-center text-purple-800 mb-6 animate__animated animate__fadeInDown">
    Gestión de Usuarios
  </h1>
  <div class="w-32 h-2 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto mb-12 rounded-full animate__animated animate__fadeInUp"></div>

  <div class="max-w-6xl mx-auto">
    <div class="flex justify-end mb-6 animate__animated animate__fadeInRight">
      <a href="{{ route('usuarios.create') }}" class="bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50 transition duration-300 transform hover:scale-105 shadow-lg">
        <i class="fas fa-user-plus mr-2"></i>Crear Usuario
      </a>
    </div>

    <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl overflow-hidden animate__animated animate__zoomIn">
>>>>>>> 8abd99675a311db6555818c474c2d5a81266cbce
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
          <thead class="bg-purple-100">
            <tr>
<<<<<<< HEAD
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider">Nombre</th>
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider">Email</th>
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider">Acciones</th>
=======
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider animate__animated animate__fadeInDown animate__delay-1s">Nombre</th>
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider animate__animated animate__fadeInDown animate__delay-2s">Email</th>
              <th class="px-4 py-3 text-left text-xs font-semibold text-purple-800 uppercase tracking-wider animate__animated animate__fadeInDown animate__delay-3s">Acciones</th>
>>>>>>> 8abd99675a311db6555818c474c2d5a81266cbce
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-purple-200">
            @foreach($usuarios as $usuario)
<<<<<<< HEAD
            <tr class="hover:bg-purple-50 transition-colors duration-200">
              <td class="px-4 py-4 whitespace-nowrap">{{ $usuario->name }}</td>
              <td class="px-4 py-4 whitespace-nowrap">{{ $usuario->email }}</td>
              <td class="px-4 py-4 whitespace-nowrap">
                <a href="{{ route('usuarios.edit', $usuario) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300 mr-2">
                  <i class="fas fa-edit mr-1"></i>Editar
                </a>
                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="inline-block">
=======
            <tr class="hover:bg-purple-50 transition-colors duration-200 animate__animated animate__fadeIn animate__delay-{{ $loop->iteration }}s">
              <td class="px-4 py-4 whitespace-nowrap">{{ $usuario->name }}</td>
              <td class="px-4 py-4 whitespace-nowrap">{{ $usuario->email }}</td>
              <td class="px-4 py-4 whitespace-nowrap">
                <a href="{{ route('usuarios.edit', $usuario) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300 mr-2 animate__animated animate__fadeIn animate__delay-{{ $loop->iteration + 3 }}s">
                  <i class="fas fa-edit mr-1"></i>Editar
                </a>
                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="inline-block animate__animated animate__fadeIn animate__delay-{{ $loop->iteration + 4 }}s">
>>>>>>> 8abd99675a311db6555818c474c2d5a81266cbce
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300" onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?')">
                    <i class="fas fa-trash-alt mr-1"></i>Eliminar
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<style>
  @media (max-width: 640px) {
    table {
      font-size: 0.875rem;
    }
    .table-actions {
      display: flex;
      flex-direction: column;
    }
    .table-actions a, .table-actions button {
      margin-bottom: 0.5rem;
    }
  }
<<<<<<< HEAD
</style>
@endsection
=======

  .animate__delay-1s { --animate-delay: 0.2s; }
  .animate__delay-2s { --animate-delay: 0.4s; }
  .animate__delay-3s { --animate-delay: 0.6s; }
  .animate__delay-4s { --animate-delay: 0.8s; }
  .animate__delay-5s { --animate-delay: 1s; }
</style>

<!-- Incluye la librería Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
>>>>>>> 8abd99675a311db6555818c474c2d5a81266cbce
