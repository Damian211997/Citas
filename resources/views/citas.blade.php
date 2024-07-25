@extends('layouts.app')

@section('title', 'Gestión de Citas - NutriLife')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-pink-100 to-purple-300 p-6">
    <div class="bg-white p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105 duration-300 mb-8">
        <h2 class="text-3xl font-bold mb-6 text-purple-900">Calendario de Citas</h2>
        <div id='calendar' class="w-full h-96"></div>
    </div>

    <h3 class="text-2xl font-semibold mb-4 text-purple-900">Próximas Citas</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($citas as $cita)
        <div class="bg-white rounded-lg shadow-lg p-6 transition duration-300 ease-in-out hover:shadow-xl">
            <h3 class="text-xl font-semibold text-purple-900 mb-3">{{ $cita->nombre }}</h3>
            <p class="text-sm text-gray-600 flex items-center mb-2">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                {{ $cita->fecha }}
            </p>
            <p class="text-sm text-gray-600 flex items-center mb-2">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                {{ $cita->hora }}
            </p>
            <p class="text-sm text-gray-600 flex items-center mb-2">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                {{ $cita->email }}
            </p>
            <p class="text-sm text-gray-600 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                {{ $cita->telefono }}
            </p>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal para agregar cita -->
<div id="addCitaModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
  <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 transition-opacity" aria-hidden="true">
          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>

      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
          <form action="{{ route('citas.store') }}" method="POST" id="addCitaForm">
              @csrf
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                  <h3 class="text-2xl leading-6 font-bold text-purple-900 mb-6">Agregar Nueva Cita</h3>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <div class="mb-4">
                          <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                          <input type="text" name="nombre" id="nombre" required class="mt-1 focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                      <div class="mb-4">
                          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                          <input type="email" name="email" id="email" required class="mt-1 focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                      <div class="mb-4">
                          <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                          <input type="tel" name="telefono" id="telefono" class="mt-1 focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                      <div class="mb-4">
                          <label for="fecha" class="block text-sm font-medium text-gray-700 mb-1">Fecha</label>
                          <input type="date" name="fecha" id="fecha" required class="mt-1 focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                      <div class="mb-4">
                          <label for="hora" class="block text-sm font-medium text-gray-700 mb-1">Hora</label>
                          <input type="time" name="hora" id="hora" required class="mt-1 focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                  </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                  <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-purple-600 text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm transition duration-150 ease-in-out">
                      Agregar Cita
                  </button>
                  <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:w-auto sm:text-sm transition duration-150 ease-in-out" onclick="closeModal()">
                      Cancelar
                  </button>
              </div>
          </form>
      </div>
  </div>
</div>

<!-- Modal para mostrar información de la cita -->
<div id="infoCitaModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline-info">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4" id="modal-headline-info">Información de la Cita</h3>
                <div class="mt-2">
                    <p class="text-sm text-gray-500" id="citaInfo"></p>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" onclick="cancelCita()">
                    Cancelar Cita
                </button>
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:w-auto sm:text-sm" onclick="closeInfoModal()">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>

<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'es',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            },
            buttonText: {
                today: 'Hoy',
                month: 'Mes',
                week: 'Semana',
                list: 'Lista'
            },
            selectable: true,
            select: function(info) {
                document.getElementById('fecha').value = info.startStr;
                openModal();
            },
            eventClick: function(info) {
                var eventObj = info.event;
                document.getElementById('citaInfo').innerHTML = `
                    <strong>Nombre:</strong> ${eventObj.title}<br>
                    <strong>Fecha:</strong> ${eventObj.start.toLocaleDateString()}<br>
                    <strong>Hora:</strong> ${eventObj.start.toLocaleTimeString()}
                `;
                document.getElementById('infoCitaModal').dataset.eventId = eventObj.id;
                openInfoModal();
            },
            events: [
                @foreach($citas as $cita)
                {
                    id: '{{ $cita->id }}',
                    title: '{{ $cita->nombre }}',
                    start: '{{ $cita->fecha }}T{{ $cita->hora }}',
                    backgroundColor: '#a78bfa',
                    borderColor: '#8b5cf6'
                },
                @endforeach
            ]
        });
        calendar.render();
    });

    function openModal() {
        document.getElementById('addCitaModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('addCitaModal').classList.add('hidden');
    }

    function openInfoModal() {
        document.getElementById('infoCitaModal').classList.remove('hidden');
    }

    function closeInfoModal() {
        document.getElementById('infoCitaModal').classList.add('hidden');
    }

    function cancelCita() {
        var eventId = document.getElementById('infoCitaModal').dataset.eventId;
        fetch(`/citas/${eventId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                location.reload();
            } else {
                alert('Error al cancelar la cita.');
            }
        });
    }
</script>

<style>
    .fc {
        font-family: 'Inter', sans-serif;
    }
    .fc-toolbar-title {
        font-size: 1.75em !important;
        color: #5a1e96;
    }
    .fc-button-primary {
        background-color: #8b5cf6 !important;
        border-color: #7c3aed !important;
    }
    .fc-button-primary:hover {
        background-color: #7c3aed !important;
    }
    .fc-day-today {
        background-color: #f3e8ff !important;
    }
    .fc-event {
        background-color: #a78bfa;
        border-color: #8b5cf6;
        transition: all 0.3s ease;
    }
    .fc-event:hover {
        transform: scale(1.05);
    }
    @media (max-width: 640px) {
        .fc-toolbar {
            flex-direction: column;
        }
        .fc-toolbar-title {
            margin-bottom: 1rem;
        }
    }
</style>
@endsection
