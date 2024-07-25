@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-pink-100 to-purple-300 p-6">
    <!-- Main Content -->
    <div class="bg-white p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105 duration-300">
        <h1 class="text-3xl font-bold text-purple-900 mb-6">
            ¡Bienvenido , {{ auth()->user()->name }}!
        </h1>
        <p class="text-lg font-medium text-gray-700 mb-4">
            Hoy es {{ \Carbon\Carbon::now()->isoFormat('dddd, D [de] MMMM [de] YYYY') }}
            y son las <span class="font-semibold" id="current-time"></span>.
        </p>
        <p class="text-lg font-medium text-gray-700">
            Esperamos que tengas un excelente día gestionando tu plataforma.
        </p>

        <!-- Quick Stats -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach(['Usuarios', 'Productos', 'Pedidos', 'Ingresos'] as $stat)
                <div class="bg-purple-50 p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-lg hover:bg-purple-100">
                    <h3 class="text-xl font-semibold text-purple-800">{{ $stat }}</h3>
                    <p class="text-3xl font-bold text-purple-600">{{ rand(100, 1000) }}</p>
                </div>
            @endforeach
        </div>

        <!-- Recent Activity -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-purple-900 mb-4">Actividad Reciente</h2>
            <ul class="space-y-4">
                @for ($i = 0; $i < 5; $i++)
                    <li class="bg-gray-50 p-4 rounded-md shadow-sm transition-all duration-300 hover:bg-gray-100">
                        <span class="font-medium text-purple-700">Usuario {{ $i + 1 }}</span> realizó una acción
                    </li>
                @endfor
            </ul>
        </div>
    </div>
@endsection

@section('footer')
<footer class="bg-purple-900 text-white py-6 text-center">
    <p>&copy; {{ date('Y') }} NutriLife. Todos los derechos reservados.</p>
</footer>
@endsection

@push('scripts')
<script>
    function updateTime() {
        const now = new Date();
        document.getElementById('current-time').textContent = now.toLocaleTimeString('es-ES');
    }

    setInterval(updateTime, 1000);
    updateTime(); // Initial call
</script>
@endpush
