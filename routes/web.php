<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ConfiguracionController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/citas', [CitasController::class, 'index'])->name('citas.index');
Route::post('/citas', [CitasController::class, 'store'])->name('citas.store');
Route::delete('/citas/{id}', [CitasController::class, 'destroy'])->name('citas.destroy');

// Rutas para gestión de usuarios
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{user}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{user}', [UsuariosController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{user}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

// Ruta para configuración
Route::get('/configuracion', [ConfiguracionController::class, 'index'])->name('configuracion.index');
