<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitasController extends Controller
{
    public function index()
    {
        $citas = Cita::all();
        return view('citas', compact('citas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        // Crear una nueva instancia de Cita con los datos validados
        $cita = new Cita([
            'nombre' => $request->get('nombre'),
            'email' => $request->get('email'),
            'telefono' => $request->get('telefono'),
            'fecha' => $request->get('fecha'),
            'hora' => $request->get('hora'),
            'user_id' => auth()->id(), // Asignar el user_id del usuario autenticado
        ]);

        // Guardar la cita en la base de datos
        $cita->save();

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('citas.index')->with('success', 'Cita guardada con éxito');
    }

    public function destroy($id)
    {
        // Encontrar la cita o lanzar una excepción si no existe
        $cita = Cita::findOrFail($id);
        
        // Eliminar la cita
        $cita->delete();

        // Devolver una respuesta JSON con un mensaje de éxito
        return response()->json(['message' => 'Cita eliminada correctamente.']);
    }
}
