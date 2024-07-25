<!-- resources/views/usuarios/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold text-purple-800 mb-6">Crear Usuario</h1>

    @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-purple-800 font-bold mb-2">Nombre</label>
            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-purple-800 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-purple-800 font-bold mb-2">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-purple-800 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-purple-800 font-bold mb-2">Contraseña</label>
            <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-purple-800 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-purple-800 font-bold mb-2">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-purple-800 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <button type="submit" class="bg-gradient-nutrilife hover-bg-gradient-nutrilife text-white font-bold py-2 px-4 rounded-full transition duration-300">Crear</button>
    </form>
</div>
@endsection
