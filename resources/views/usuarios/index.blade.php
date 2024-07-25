@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-pink-100 to-purple-300 p-6">
    <div class="bg-white p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105 duration-300">
        <h1 class="text-3xl font-bold text-purple-900 mb-6">Lista de Usuarios</h1>

        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <a href="{{ route('usuarios.create') }}" class="bg-gradient-nutrilife hover:bg-gradient-nutrilife text-white font-bold py-2 px-4 rounded-full transition duration-300 inline-block mb-4">
            Crear Usuario
        </a>

        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <thead class="bg-purple-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-purple-800">ID</th>
                        <th class="px-4 py-2 text-left text-purple-800">Nombre</th>
                        <th class="px-4 py-2 text-left text-purple-800">Email</th>
                        <th class="px-4 py-2 text-left text-purple-800">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $usuario->id }}</td>
                            <td class="px-4 py-2">{{ $usuario->name }}</td>
                            <td class="px-4 py-2">{{ $usuario->email }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded-full transition duration-300 mr-2">
                                    Editar
                                </a>
                                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded-full transition duration-300" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                        Eliminar
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
@endsection
