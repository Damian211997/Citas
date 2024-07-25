@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-gradient-to-r from-purple-400 to-pink-500 w-1/3 rounded-lg shadow-lg transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
    <h1 class="text-3xl text-center font-bold text-white mb-6 animate-bounce">Bienvenido a NutriLife</h1>
    <p class="text-center text-white mb-6">¡Nos alegra verte de nuevo! Por favor, inicia sesión para continuar.</p>
    <form class="mt-4" method="POST" action="{{ route('login.store') }}">
      @csrf
      <input type="email" class="rounded-md bg-white bg-opacity-20 w-full text-lg text-white placeholder-white placeholder-opacity-70 p-3 my-2 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Email" id="email" name="email">
      <input type="password" class="rounded-md bg-white bg-opacity-20 w-full text-lg text-white placeholder-white placeholder-opacity-70 p-3 my-2 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Contraseña" id="password" name="password">
      @error('message')
        <p class="rounded-md bg-red-100 bg-opacity-20 w-full text-white p-2 my-2">* {{ $message }}</p>
      @enderror
      <button type="submit" class="rounded-md bg-white bg-opacity-20 w-full text-lg text-white font-semibold p-3 my-3 hover:bg-opacity-30 transition duration-300">Iniciar Sesión</button>
    </form>
    <p class="text-center text-white mt-6">¿No tienes una cuenta? <a href="{{ route('register.index') }}" class="font-bold underline hover:text-white">Regístrate aquí</a></p>
  </div>

@endsection
