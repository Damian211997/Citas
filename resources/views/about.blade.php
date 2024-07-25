@extends('layouts.app')

@section('title', 'Nosotros - NutriLife')

@section('header')
<header id="header" class="relative w-full h-screen flex justify-center items-center overflow-hidden">
  <video autoplay loop muted class="absolute w-full h-full object-cover">
    <source src="path/to/your/video.mp4" type="video/mp4">
  </video>
  <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50"></div>
  <nav class="absolute top-0 w-full p-6 transition-all duration-300" id="navbar">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-white text-2xl font-bold">NutriLife</a>
      <ul class="hidden md:flex space-x-8">
        <li><a class="text-white hover:text-pink-500 transition duration-300" href="#header">Inicio</a></li>
        <li><a class="text-white hover:text-pink-500 transition duration-300" href="#about">Nosotros</a></li>
        <li><a class="text-white hover:text-pink-500 transition duration-300" href="#services">Servicios</a></li>
        <li><a class="text-white hover:text-pink-500 transition duration-300" href="#portfolio">Trabajos</a></li>
        <li><a class="text-white hover:text-pink-500 transition duration-300" href="#contact">Contacto</a></li>
      </ul>
    </div>
  </nav>
  <div class="text-center text-white z-10">
    <h1 class="text-6xl md:text-8xl font-thin uppercase tracking-widest mb-4">Limpio y Nutritivo</h1>
    <h2 class="text-xl md:text-2xl font-light uppercase tracking-wider">Una vida saludable empieza aquí</h2>
    <a href="#about" class="mt-8 inline-block bg-pink-500 text-white py-3 px-8 rounded-full hover:bg-pink-600 transition duration-300">Descubre más</a>
  </div>
</header>
@endsection

@section('content')
<section id="about" class="py-24 bg-gray-100">
  <div class="container mx-auto">
    <h2 class="text-4xl font-light text-center mb-16">Nosotros</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <div class="bg-white p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
        <i class="fas fa-leaf text-5xl text-pink-500 mb-4"></i>
        <h3 class="text-2xl font-semibold mb-4">Nuestro Proceso</h3>
        <p>Creemos en un enfoque holístico de la salud, combinando la ciencia moderna con la sabiduría tradicional.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
        <i class="fas fa-heart text-5xl text-pink-500 mb-4"></i>
        <h3 class="text-2xl font-semibold mb-4">Nuestra Metodología</h3>
        <p>Priorizamos planes de nutrición personalizados que se adaptan a las necesidades individuales.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
        <i class="fas fa-bullseye text-5xl text-pink-500 mb-4"></i>
        <h3 class="text-2xl font-semibold mb-4">Nuestra Meta</h3>
        <p>Empoderar a las personas para que tomen decisiones informadas sobre su salud.</p>
      </div>
      <div class="bg-white p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
        <i class="fas fa-flag text-5xl text-pink-500 mb-4"></i>
        <h3 class="text-2xl font-semibold mb-4">Nuestra Misión</h3>
        <p>Inspirar y educar a las personas para que adopten estilos de vida más saludables.</p>
      </div>
    </div>
  </div>
</section>
</section>

<section id="team" class="py-16 bg-gray-100">
  <section id="team" class="py-24">
    <div class="container mx-auto">
      <h2 class="text-4xl font-light text-center mb-16">Conoce al Equipo</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
          <img src="http://placehold.it/300x300" alt="Juan Pérez" class="w-full">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2">Juan Pérez</h4>
            <p class="text-gray-600 mb-4">Nutricionista Principal</p>
            <div class="flex justify-center space-x-4">
              <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-gray-400 hover:text-pink-500"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
        <!-- Repite este bloque para los otros miembros del equipo -->
      </div>
    </div>
  </section>
</section>

<section id="services" class="py-16 bg-gray-50">
  <section id="services" class="py-24 bg-gray-100">
    <div class="container mx-auto">
      <h2 class="text-4xl font-light text-center mb-16">Nuestros Servicios</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
          <div class="p-1 bg-gradient-to-r from-pink-500 to-purple-500"></div>
          <div class="p-8">
            <i class="fas fa-utensils text-4xl text-pink-500 mb-4"></i>
            <h3 class="text-2xl font-semibold mb-4">Planes de Nutrición Personalizados</h3>
            <p class="text-gray-600">Desarrollamos planes de nutrición adaptados a tus necesidades únicas, ayudándote a alcanzar tus objetivos de salud de manera efectiva.</p>
          </div>
        </div>
  
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
          <div class="p-1 bg-gradient-to-r from-pink-500 to-purple-500"></div>
          <div class="p-8">
            <i class="fas fa-heartbeat text-4xl text-pink-500 mb-4"></i>
            <h3 class="text-2xl font-semibold mb-4">Coaching de Bienestar</h3>
            <p class="text-gray-600">Nuestros coaches de bienestar te brindan la orientación y el apoyo necesarios para lograr cambios duraderos en tu estilo de vida.</p>
          </div>
        </div>
  
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
          <div class="p-1 bg-gradient-to-r from-pink-500 to-purple-500"></div>
          <div class="p-8">
            <i class="fas fa-dumbbell text-4xl text-pink-500 mb-4"></i>
            <h3 class="text-2xl font-semibold mb-4">Programas de Fitness</h3>
            <p class="text-gray-600">Ofrecemos programas de entrenamiento personalizados que complementan tu plan nutricional para maximizar tus resultados.</p>
          </div>
        </div>
  
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
          <div class="p-1 bg-gradient-to-r from-pink-500 to-purple-500"></div>
          <div class="p-8">
            <i class="fas fa-book-open text-4xl text-pink-500 mb-4"></i>
            <h3 class="text-2xl font-semibold mb-4">Talleres Educativos</h3>
            <p class="text-gray-600">Participa en nuestros talleres interactivos sobre nutrición, cocina saludable y hábitos de vida equilibrados.</p>
          </div>
        </div>
  
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
          <div class="p-1 bg-gradient-to-r from-pink-500 to-purple-500"></div>
          <div class="p-8">
            <i class="fas fa-users text-4xl text-pink-500 mb-4"></i>
            <h3 class="text-2xl font-semibold mb-4">Programas Corporativos</h3>
            <p class="text-gray-600">Implementamos soluciones de bienestar para empresas, mejorando la salud y productividad de los empleados.</p>
          </div>
        </div>
  
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
          <div class="p-1 bg-gradient-to-r from-pink-500 to-purple-500"></div>
          <div class="p-8">
            <i class="fas fa-mobile-alt text-4xl text-pink-500 mb-4"></i>
            <h3 class="text-2xl font-semibold mb-4">App de Seguimiento</h3>
            <p class="text-gray-600">Accede a nuestra app exclusiva para monitorear tu progreso, recibir consejos diarios y mantenerte motivado.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>


<section id="contact" class="py-16">
  <section id="contact" class="py-24 bg-gray-100">
    <div class="container mx-auto">
      <h2 class="text-4xl font-light text-center mb-16">Contáctanos</h2>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div class="bg-white rounded-lg shadow-lg p-8">
          <form id="contact-form" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500" required>
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500" required>
              </div>
            </div>
            <div>
              <label for="asunto" class="block text-sm font-medium text-gray-700 mb-1">Asunto</label>
              <input type="text" id="asunto" name="asunto" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500" required>
            </div>
            <div>
              <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
              <textarea id="mensaje" name="mensaje" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500" required></textarea>
            </div>
            <div>
              <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-purple-500 text-white font-bold py-3 px-6 rounded-md hover:from-pink-600 hover:to-purple-600 transition duration-300">Enviar Mensaje</button>
            </div>
          </form>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-2xl font-semibold mb-6">Información de Contacto</h3>
          <ul class="space-y-4">
            <li class="flex items-center">
              <i class="fas fa-map-marker-alt text-pink-500 mr-4"></i>
              <span>123 Calle Saludable, Ciudad Nutrición, CP 12345</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-phone text-pink-500 mr-4"></i>
              <span>+1 (234) 567-8901</span>
            </li>
            <li class="flex items-center">
              <i class="fas fa-envelope text-pink-500 mr-4"></i>
              <span>info@nutrilife.com</span>
            </li>
          </ul>
          <div class="mt-8">
            <h4 class="text-xl font-semibold mb-4">Síguenos en Redes Sociales</h4>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-pink-500 transition duration-300">
                <i class="fab fa-facebook-f text-2xl"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-pink-500 transition duration-300">
                <i class="fab fa-twitter text-2xl"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-pink-500 transition duration-300">
                <i class="fab fa-instagram text-2xl"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-pink-500 transition duration-300">
                <i class="fab fa-linkedin-in text-2xl"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
@endsection

