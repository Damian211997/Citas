<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    // Constructor para aplicar middleware de autenticación
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Método para listar usuarios
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    // Método para mostrar el formulario de creación de usuario
    public function create()
    {
        return view('usuarios.create');
    }

    // Método para almacenar un nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito');
    }

    // Método para mostrar el formulario de edición de usuario
    public function edit(User $user)
    {
        return view('usuarios.edit', compact('user'));
    }

    // Método para actualizar un usuario
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado con éxito');
    }

    // Método para eliminar un usuario
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado con éxito');
    }
}
