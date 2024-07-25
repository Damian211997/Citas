@extends('layouts.app')

@section('title', 'Configuración - NutriLife')

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
  <h1 class="text-5xl font-extrabold text-center text-purple-800 mb-6 animate__animated animate__fadeInDown">
    Configuración
  </h1>
  <div class="w-32 h-2 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto mb-12 rounded-full animate__animated animate__fadeInUp"></div>

  <div class="max-w-4xl mx-auto">
    <div class="bg-white p-8 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl animate__animated animate__fadeIn">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="space-y-6">
          <h2 class="text-2xl font-semibold text-purple-700 mb-4">Configuración General</h2>
          <div>
            <label for="siteName" class="block text-sm font-medium text-gray-700 mb-1">Nombre del Sitio</label>
            <input type="text" id="siteName" name="siteName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
          </div>
          <div>
            <label for="timezone" class="block text-sm font-medium text-gray-700 mb-1">Zona Horaria</label>
            <select id="timezone" name="timezone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
              <option>UTC-5 (Eastern Time)</option>
              <option>UTC-6 (Central Time)</option>
              <option>UTC-7 (Mountain Time)</option>
              <option>UTC-8 (Pacific Time)</option>
            </select>
          </div>
        </div>
        <div class="space-y-6">
          <h2 class="text-2xl font-semibold text-purple-700 mb-4">Configuración de Correo</h2>
          <div>
            <label for="emailFrom" class="block text-sm font-medium text-gray-700 mb-1">Correo de Remitente</label>
            <input type="email" id="emailFrom" name="emailFrom" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
          </div>
          <div>
            <label for="smtpServer" class="block text-sm font-medium text-gray-700 mb-1">Servidor SMTP</label>
            <input type="text" id="smtpServer" name="smtpServer" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
          </div>
        </div>
      </div>
      <div class="mt-8 text-center">
        <button type="submit" class="bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50 transition duration-300 transform hover:scale-105 shadow-lg">
          Guardar Configuración
        </button>
      </div>
    </div>
  </div>
</div>

<style>
  input[type="text"],
  input[type="email"],
  select {
    transition: all 0.3s ease-in-out;
  }
  input[type="text"]:focus,
  input[type="email"]:focus,
  select:focus {
    transform: translateY(-2px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }
</style>
@endsection
