@extends('layouts.app')

@section('titulo', 'Impertherm')

@section('content')

<body class="bg-white">
<!-- Sección Hero (Imagen de fondo) -->
<section class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/homepage/image 1.jpeg') }}');">
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="container mx-auto flex flex-col justify-center items-start h-full relative px-6">
      <h2 class="text-white text-4xl md:text-6xl font-bold max-w-xl">
          Protege tu hogar o negocio con nuestros impermeabilizantes
      </h2>
      <p class="text-white text-lg mt-4 max-w-lg">
          Asegura la durabilidad y protección contra filtraciones con nuestros servicios profesionales de impermeabilización.
      </p>
      <div class="mt-6">
        <a href="{{ url('/contactanos') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transform transition-transform hover:scale-110 duration-300">
          Contáctanos
        </a>        
      </div>
  </div>
</section>

  <!-- carousel -->
<div class="container mx-auto px-4 py-8">
  <!-- Título de la sección -->
  <div class="text-center mb-8">
    <h2 class="text-3xl font-bold text-gray-800">Trabajos realizados</h2>
    <p class="text-gray-600">
      Descubre algunos de los proyectos exitosos de impermeabilización realizados por nuestro equipo.
    </p>
  </div>

  <!-- Carousel sin padding ni margen adicional -->
  <div id="carousel" class="relative bg-gray-300 rounded-lg shadow-lg overflow-hidden">
    <!-- Contenedor de slides -->
    <div id="slides" class="flex transition-transform duration-700 ease-in-out" style="transform: translateX(0%);">
      <!-- Slide 1 -->
      <div class="w-full flex-shrink-0 relative">
        <img src="{{ asset('images/homepage/edit c 1.png') }}" class="w-full rounded-lg" alt="Trabajo 1">
        <!-- Overlay: Fondo negro sólo en la parte inferior -->
        <div class="text-center absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-4">
          <h5 class="text-xl font-bold">Impermeabilización de techos</h5>
          <p>Un trabajo realizado para proteger un edificio comercial de filtraciones.</p>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="w-full flex-shrink-0 relative">
        <img src="{{ asset('images/homepage/c2.png') }}" class="w-full rounded-lg" alt="Trabajo 2">
        <div class="text-center absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-4">
          <h5 class="text-xl font-bold">Reparación de cubiertas</h5>
          <p>Instalación de membranas de alta resistencia en un complejo residencial.</p>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="w-full flex-shrink-0 relative">
        <img src="{{ asset('images/homepage/c3.png') }}" class="w-full rounded-lg" alt="Trabajo 3">
        <div class="text-center absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-4">
          <h5 class="text-xl font-bold">Aplicación de impermeabilizantes</h5>
          <p>Soluciones personalizadas para hogares en climas húmedos.</p>
        </div>
      </div>
    </div>

    <!-- Botón Anterior -->
    <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <!-- Botón Siguiente -->
    <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>

    <!-- Indicadores (rayas) -->
    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
      <button data-slide="0" class="w-8 h-1 bg-slate-300 opacity-50 hover:opacity-100 focus:outline-none"></button>
      <button data-slide="1" class="w-8 h-1 bg-slate-300 opacity-50 hover:opacity-100 focus:outline-none"></button>
      <button data-slide="2" class="w-8 h-1 bg-slate-300 opacity-50 hover:opacity-100 focus:outline-none"></button>
    </div>
  </div>
</div>

<section class="seccion" data-bg-color="#f0f4f8">
  <!-- Botón WhatsApp Flotante -->
  <!-- Contenido sección 1 -->
  <div class="relative bg-gradient-to-r from-blue-50 to-gray-50 rounded-xl shadow-lg overflow-hidden md:flex md:items-center md:gap-8 p-6 md:p-12 my-12">
      <!-- Imagen decorativa -->
      <div class="md:w-1/2 lg:w-2/5 mb-8 md:mb-0 transform hover:scale-105 transition-transform duration-300">
          <img 
              src="{{ asset('images/descarga3.jpg') }}" 
              alt="Equipo de Impertherm aplicando impermeabilizante"
              class="rounded-lg shadow-md w-full h-64 md:h-96 object-cover"
              data-aos="fade-right"
          >
      </div>
  
      <!-- Contenido textual -->
      <div class="md:w-1/2 lg:w-3/5 space-y-6">
          <h2 class="text-3xl md:text-4xl font-bold text-blue-900" data-aos="fade-up">
              IMPERTHERM - Expertos en Soluciones Integrales de Impermeabilización
          </h2>
          
          <p class="text-lg text-gray-700 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
              Con más de 15 años de experiencia en el mercado, nos especializamos en protección 
              avanzada de superficies contra filtraciones y humedad. Nuestra pasión por la calidad 
              nos ha posicionado como líderes en diferentes ciudades.
          </p>
  
          <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
              <div class="flex items-center gap-3 text-blue-800">
                  <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16z"/>
                  </svg>
                  <span class="font-semibold">Especialistas en:</span>
              </div>
              
              <ul class="grid md:grid-cols-2 gap-4 text-gray-700">
                  <li class="flex items-center gap-2">
                      <span class="text-blue-600">✓</span> Membranas líquidas y asfálticas
                  </li>
                  <li class="flex items-center gap-2">
                      <span class="text-blue-600">✓</span> Inyección de grietas estructurales
                  </li>
                  <li class="flex items-center gap-2">
                      <span class="text-blue-600">✓</span> Sistemas de drenaje pluvial
                  </li>
                  <li class="flex items-center gap-2">
                      <span class="text-blue-600">✓</span> Impermeabilización de terrazas
                  </li>
              </ul>
          </div>
  
          <div class="mt-6 border-t pt-6" data-aos="fade-up" data-aos-delay="300">
              <p class="text-sm text-gray-600">
                  <span class="block font-semibold text-lg mb-2">Compromiso de calidad:</span>
                  Garantía escrita de 5 años en todos nuestros trabajos + Inspecciones periódicas sin costo
              </p>
          </div>
      </div>
  
      <!-- Elemento decorativo -->
      <div class="absolute bottom-0 right-0 w-32 h-32 bg-blue-100 opacity-30 rounded-tl-full"></div>
  </div>
</section>

<!-- Sección de Beneficios -->
<section class="container mx-auto px-4 py-8">
  <!-- Título de la sección -->
  <h2 class="text-3xl font-bold text-center mb-8">Beneficios de Impermeabilizar</h2>

  <!-- Grid de Beneficios (6 tarjetas) -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Beneficio 1: Previene filtraciones y goteras -->
    <div data-aos="fade-up-right" data-aos-delay="200">
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-10 hover:scale-105">
        <!-- Contenedor horizontal: Icono y Título -->
        <div class="flex items-center justify-center mb-2">
          <div class="transition transform hover:scale-105 vibrating-icon">
            <img src="{{ asset('images/icons/water.png') }}" alt="Icono de gota de agua" class="h-12 w-12">
          </div>
          <h3 class="ml-3 text-lg font-bold">Previene filtraciones y goteras</h3>
        </div>
        <!-- Separador -->
        <div class="border-b border-gray-300 w-full mb-2"></div>
        <!-- Descripción -->
        <p class="text-gray-600 text-center">
          Evita que el agua o la humedad penetren en techos, paredes o sótanos, protegiendo el interior.
        </p>
      </div>
    </div>

    <!-- Beneficio 2: Prolonga la vida útil -->
    <div data-aos="fade-up-right" data-aos-delay="400">
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-10 hover:scale-105">
        <div class="flex items-center justify-center mb-2">
          <div class="transition transform hover:scale-105 vibrating-icon">
            <img src="{{ asset('images/icons/life.png') }}" alt="Icono de edificio" class="h-12 w-12">
          </div>
          <h3 class="ml-3 text-lg font-bold">Prolonga la vida útil</h3>
        </div>
        <div class="border-b border-gray-300 w-full mb-2"></div>
        <p class="text-gray-600 text-center">
          Protege los materiales de la humedad constante y extiende la durabilidad de la construcción.
        </p>
      </div>
    </div>

    <!-- Beneficio 3: Ahorro en reparaciones costosas -->
    <div data-aos="fade-up-right" data-aos-delay="600">
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-10 hover:scale-105">
        <div class="flex items-center justify-center mb-2">
          <div class="transition transform hover:scale-105 vibrating-icon">
            <img src="{{ asset('images/icons/saving.png') }}" alt="Icono de ahorro" class="h-12 w-12">
          </div>
          <h3 class="ml-3 text-lg font-bold">Ahorro en reparaciones</h3>
        </div>
        <div class="border-b border-gray-300 w-full mb-2"></div>
        <p class="text-gray-600 text-center">
          Prevenir filtraciones evita daños estructurales y reparaciones mayores.
        </p>
      </div>
    </div>

    <!-- Beneficio 4: Previene hongos y moho -->
    <div data-aos="fade-up-right" data-aos-delay="200">
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-10 hover:scale-105">
        <div class="flex items-center justify-center mb-2">
          <div class="transition transform hover:scale-105 vibrating-icon">
            <img src="{{ asset('images/icons/virus.png') }}" alt="Icono de prevención de moho" class="h-12 w-12">
          </div>
          <h3 class="ml-3 text-lg font-bold">Previene hongos y moho</h3>
        </div>
        <div class="border-b border-gray-300 w-full mb-2"></div>
        <p class="text-gray-600 text-center">
          Reduce el crecimiento de hongos y bacterias, manteniendo un ambiente saludable.
        </p>
      </div>
    </div>

    <!-- Beneficio 5: Mejora la estética -->
    <div data-aos="fade-up-right" data-aos-delay="400">
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-10 hover:scale-105">
        <div class="flex items-center justify-center mb-2">
          <div class="transition transform hover:scale-105 vibrating-icon">
            <img src="{{ asset('images/icons/stars.png') }}" alt="Icono de estética" class="h-12 w-12">
          </div>
          <h3 class="ml-3 text-lg font-bold">Mejora la estética</h3>
        </div>
        <div class="border-b border-gray-300 w-full mb-2"></div>
        <p class="text-gray-600 text-center">
          Evita manchas y deterioro, manteniendo tus espacios modernos y bien cuidados.
        </p>
      </div>
    </div>

    <!-- Beneficio 6: Protección contra climas extremos -->
    <div data-aos="fade-up-right" data-aos-delay="600">
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-10 hover:scale-105">
        <div class="flex items-center justify-center mb-2">
          <div class="transition transform hover:scale-105 vibrating-icon">
            <img src="{{ asset('images/icons/shield.png') }}" alt="Icono de protección" class="h-12 w-12">
          </div>
          <h3 class="ml-3 text-lg font-bold">Protección extrema</h3>
        </div>
        <div class="border-b border-gray-300 w-full mb-2"></div>
        <p class="text-gray-600 text-center">
          Resiste rayos UV, heladas y granizo, asegurando la integridad estructural.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- Sección de productos --}}
<section class="seccion" data-bg-color="#BBA9BB">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <!-- Sección de título -->
    <div class="mx-auto max-w-2xl text-center sm:text-left lg:text-center">
      <h2 class="text-base font-semibold text-indigo-600">Nuestros Productos</h2>
      <p class="mt-2 text-3xl sm:text-4xl lg:text-5xl font-semibold tracking-tight text-gray-900">
        Tipos de Impermeabilizantes que tenemos para ti!!
      </p>
      <p class="mt-6 text-lg text-gray-600">
        <div class="flex justify-center my-8">
          <div class="w-4/5 border-t border-gray-200"></div>
        </div>
        En Impertherm contamos con una amplia gama de productos para impermeabilización, 
        adaptándonos a tus necesidades específicas. Desde membranas líquidas hasta 
        sistemas de inyección, tenemos la solución perfecta para cada proyecto.
      </p>
    </div>

    <!-- Sección de tarjetas -->
    <div class="mx-auto mt-16 max-w-2xl sm:max-w-3xl lg:max-w-4xl xl:max-w-7xl">
      <dl class="grid gap-x-8 gap-y-10 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        <!-- Tarjeta 1 -->
        <div class="group relative bg-white rounded-xl shadow-lg p-8 transition-all duration-500 hover:bg-blue-50 hover:shadow-xl hover:-translate-y-2">
          <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity">
            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 rounded-bl-full"></div>
          </div>
          <div class="relative space-y-6">
            <div class="w-16 h-16 rounded-lg bg-blue-600 mb-6 transform group-hover:rotate-12 transition-transform"></div>
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-800 transition-colors">
              Impermeabilizante Acrílico para Techos y Muros
            </h3>
            <p class="text-sm md:text-base text-gray-600 text-justify space-y-3">
              <span class="font-semibold block text-left">Beneficios</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Nuestras membranas asfálticas son la solución robusta y confiable para la impermeabilización...</li>
              </ul>
          
              <span class="font-semibold block text-left mt-4">Características clave</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Excelente resistencia mecánica, alta durabilidad, adaptabilidad a diferentes tipos de superficies...</li>
              </ul>
          
              <span class="font-semibold block text-left mt-4">Ideal para</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Techos planos e inclinados, terrazas transitables y no transitables, y otras superficies...</li>
              </ul>
          </p>
            <button class="mt-4 px-6 py-2 bg-blue-100 text-blue-800 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
              Ver Proyectos
            </button>
          </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="group relative bg-white rounded-xl shadow-lg p-8 transition-all duration-500 hover:bg-blue-50 hover:shadow-xl hover:-translate-y-2">
          <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity">
            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 rounded-bl-full"></div>
          </div>
          <div class="relative space-y-6">
            <div class="w-16 h-16 rounded-lg bg-blue-600 mb-6 transform group-hover:rotate-12 transition-transform"></div>
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-800 transition-colors">
              Impermeabilizante Acrílico para Techos y Muros
            </h3>
            <p class="text-sm md:text-base text-gray-600 text-justify space-y-3">
              <span class="font-semibold block text-left">Beneficios</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Nuestras membranas asfálticas son la solución robusta y confiable para la impermeabilización...</li>
              </ul>
          
              <span class="font-semibold block text-left mt-4">Características clave</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Excelente resistencia mecánica, alta durabilidad, adaptabilidad a diferentes tipos de superficies...</li>
              </ul>
          
              <span class="font-semibold block text-left mt-4">Ideal para</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Techos planos e inclinados, terrazas transitables y no transitables, y otras superficies...</li>
              </ul>
          </p>
            <button class="mt-4 px-6 py-2 bg-blue-100 text-blue-800 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
              Ver Proyectos
            </button>
          </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="group relative bg-white rounded-xl shadow-lg p-8 transition-all duration-500 hover:bg-blue-50 hover:shadow-xl hover:-translate-y-2">
          <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity">
            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 rounded-bl-full"></div>
          </div>
          <div class="relative space-y-6">
            <div class="w-16 h-16 rounded-lg bg-blue-600 mb-6 transform group-hover:rotate-12 transition-transform"></div>
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-800 transition-colors">
              Impermeabilizante Acrílico para Techos y Muros
            </h3>
            <p class="text-sm md:text-base text-gray-600 text-justify space-y-3">
              <span class="font-semibold block text-left">Beneficios</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Nuestras membranas asfálticas son la solución robusta y confiable para la impermeabilización...</li>
              </ul>
          
              <span class="font-semibold block text-left mt-4">Características clave</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Excelente resistencia mecánica, alta durabilidad, adaptabilidad a diferentes tipos de superficies...</li>
              </ul>
          
              <span class="font-semibold block text-left mt-4">Ideal para</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Techos planos e inclinados, terrazas transitables y no transitables, y otras superficies...</li>
              </ul>
          </p>
            <button class="mt-4 px-6 py-2 bg-blue-100 text-blue-800 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
              Ver Proyectos
            </button>
          </div>
        </div>
        <!-- Tarjeta 4 -->
        <div class="group relative bg-white rounded-xl shadow-lg p-8 transition-all duration-500 hover:bg-blue-50 hover:shadow-xl hover:-translate-y-2">
          <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity">
            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 rounded-bl-full"></div>
          </div>
          <div class="relative space-y-6">
            <div class="w-16 h-16 rounded-lg bg-blue-600 mb-6 transform group-hover:rotate-12 transition-transform"></div>
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-800 transition-colors">
              Impermeabilizante Acrílico para Techos y Muros
            </h3>
            <p class="text-sm md:text-base text-gray-600 text-justify space-y-3">
              <span class="font-semibold block text-left">Beneficios</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Nuestras membranas asfálticas son la solución robusta y confiable para la impermeabilización...</li>
              </ul>
          
              <span class="font-semibold block text-left mt-4">Características clave</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Excelente resistencia mecánica, alta durabilidad, adaptabilidad a diferentes tipos de superficies...</li>
              </ul>
          
              <span class="font-semibold block text-left mt-4">Ideal para</span>
              <ul class="list-disc pl-5 space-y-2">
                  <li>Techos planos e inclinados, terrazas transitables y no transitables, y otras superficies...</li>
              </ul>
          </p>
            <button class="mt-4 px-6 py-2 bg-blue-100 text-blue-800 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
              Ver Proyectos
            </button>
          </div>
        </div>

      </dl>
    </div>
  </div>
</section>

<!-- Sección de comentarios -->
<section id="comments" class="py-12 bg-gray-100">
 
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl font-extrabold text-gray-800 mb-4">IMPERMEABILIZACIÓN PARA TU TRANQUILIDAD</h2>
    <p class="text-lg text-gray-600 mb-6">
      Protege tu hogar o negocio con nuestros servicios de impermeabilización. No solo prevenimos filtraciones,
      ¡también garantizamos tranquilidad para años!
    </p>
  </div>
  <div class="container mx-auto px-4">
    <!-- Fila superior: comentarios que se mueven de derecha a izquierda -->
    <div class="relative overflow-hidden mask-fade">
      <!-- Contenedor 'marquee' que contenga dos grupos idénticos -->
      <div class="marquee animate-slide-left flex">
        <!-- Primer grupo de comentarios -->
        <div class="flex space-x-6">
          <!-- Tarjeta 1 -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/hannah.png') }}" alt="Hannah R. Sutton" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Lucía B. Torres</h3>
                <p class="text-sm text-gray-500">Arquitecta Independiente</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              Quedé muy satisfecha con el trabajo. Usaron materiales de calidad y se nota la diferencia. Ideal para proteger mi casa en temporada de lluvias.
            </p>
          </div>
          <!-- Tarjeta 2 -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/pearl.png') }}" alt="Pearl B. Hill" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Alejandro F. Gutiérrez</h3>
                <p class="text-sm text-gray-500">Diseñador Industrial</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              El equipo fue muy profesional y atento. Me explicaron todo el proceso y me dieron recomendaciones para el mantenimiento. Muy buen trabajo.
            </p>
          </div>
          <!-- Tarjeta 3 -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/mandy.png') }}" alt="Mandy F. Wood" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Carlos M. Ramírez<</h3>
                <p class="text-sm text-gray-500">Director General, Constructora México</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              El servicio de impermeabilización fue excelente. Cumplieron con los tiempos y dejaron todo limpio. Ahora ya no tengo filtraciones en el techo, muy recomendable.
            </p>
          </div>
        </div>
        <!-- Segundo grupo duplicado -->
        <div class="flex space-x-6">
          <!-- Tarjeta 1 duplicada -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/hannah.png') }}" alt="Hannah R. Sutton" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Fernanda Salazar</h3>
                <p class="text-sm text-gray-500">Administradora de condominio</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              Contraté el servicio para todo el techo del condominio y fue una gran decisión. El equipo fue muy organizado y dejaron todo limpio. Ya no hay quejas de goteras entre los vecinos.
            </p>
          </div>
          <!-- Tarjeta 2 duplicada -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/pearl.png') }}" alt="Pearl B. Hill" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Ricardo Torres</h3>
                <p class="text-sm text-gray-500">Maestro de obra</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              Muy recomendable, trabajaron con seriedad y respetaron los tiempos. Me gustó que explicaron todo el proceso y usaron materiales certificados. Sin duda los volveré a llamar.
            </p>
          </div>
          <!-- Tarjeta 3 duplicada -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/mandy.png') }}" alt="Mandy F. Wood" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Patricia Aguilar</h3>
                <p class="text-sm text-gray-500">Emprendedora</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              En mi local comercial ya había tenido problemas con humedad, pero desde que hicieron la impermeabilización no he tenido ni una sola filtración. Además, fueron muy atentos con los horarios.
            </p>
          </div>
        </div>
      </div>
      <!-- Gradiente para el fade en el lateral derecho -->
      <div class="absolute inset-0 bg-gradient-to-r from-transparent to-gray-100 opacity-90 pointer-events-none"></div>
    </div>

    <!-- Fila inferior: comentarios que se mueven de izquierda a derecha -->
    <div class="mt-10 relative overflow-hidden">
      <div class="marquee animate-slide-right flex">
        <!-- Primer grupo -->
        <div class="flex space-x-6">
          <!-- Tarjeta 4 -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/michael.png') }}" alt="Michael D. Lovelady" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">María González</h3>
                <p class="text-sm text-gray-500">Administradora, Inmobiliaria Centro</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              Contratamos el servicio de impermeabilización para nuestro edificio y quedamos muy satisfechos. El trabajo fue rápido, limpio y profesional. ¡Lo recomiendo ampliamente!
            </p>
          </div>
          <!-- Tarjeta 5 -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/valerie.png') }}" alt="Valerie J. Creasman" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Luis Hernández</h3>
                <p class="text-sm text-gray-500">Gerente de Operaciones, Grupo Hernández</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              Muy buen servicio, utilizaron materiales de calidad y el techo quedó perfectamente sellado. Han pasado ya varias lluvias y no ha habido filtraciones.
            </p>
          </div>
          <!-- Tarjeta 6 -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/hannah2.png') }}" alt="Hannah R. Sutton" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Ana Martínez</h3>
                <p class="text-sm text-gray-500">Diseñadora de interiores, CasaArq</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              Me encantó la atención desde el primer contacto. El equipo fue muy puntual y cuidadoso. Ahora mi casa está protegida y sin humedad.
            </p>
          </div>
        </div>
        <!-- Segundo grupo duplicado -->
        <div class="flex space-x-6">
          <!-- Tarjeta 4 duplicada -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/michael.png') }}" alt="Michael D. Lovelady" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">José Ramírez</h3>
                <p class="text-sm text-gray-500">Director General, Constructora RamCar</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              Excelente trabajo, muy profesionales. El impermeabilizante que usaron fue de alta duración y se notó el cambio desde el primer día.
            </p>
          </div>
          <!-- Tarjeta 5 duplicada -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/valerie.png') }}" alt="Valerie J. Creasman" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Sofía López</h3>
                <p class="text-sm text-gray-500">Arquitecta independiente</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              Los contraté para un proyecto residencial y me impresionaron. Muy responsables, puntuales y con un acabado impecable. ¡Volveré a contratarlos!
            </p>
          </div>
          <!-- Tarjeta 6 duplicada -->
          <div class="w-80 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/users/hannah2.png') }}" alt="Hannah R. Sutton" class="w-12 h-12 rounded-full">
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Carlos Pérez</h3>
                <p class="text-sm text-gray-500">Propietario de vivienda</p>
              </div>
            </div>
            <p class="text-gray-600 text-sm">
              Tenía filtraciones en la azotea desde hace años y ya no sabía qué hacer. Gracias a este servicio, finalmente mi casa está libre de goteras. ¡Muy agradecido!
            </p>
          </div>
        </div>
      </div>
      <!-- Gradiente en la izquierda para el fade out -->
      <div class="absolute inset-0 bg-gradient-to-l from-transparent to-gray-100 opacity-90 pointer-events-none"></div>
    </div>
  </div>
</section>

{{-- Sección de preguntas frecuentes --}}
<section class="py-12 md:py-16 lg:py-20 bg-white">
  <div class="container mx-auto px-4 md:px-6 lg:px-8 max-w-4xl">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-8 md:mb-12">
      Preguntas Frecuentes
    </h2>
    <div class="space-y-3 md:space-y-4">
      <!-- Pregunta 1 con imagen -->
      <details class="group rounded-xl bg-white hover:bg-indigo-50 border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 [&_summary::-webkit-details-marker]:hidden"
               open>
        <summary class="flex items-center gap-4 p-4 md:p-5 cursor-pointer">
          <!-- Icono decorativo -->
          <div class="hidden md:flex flex-shrink-0 w-12 h-12 bg-indigo-100 rounded-lg items-center justify-center group-hover:bg-indigo-200 transition-colors">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707"/>
            </svg>
          </div>
          
          <div class="flex-1">
            <h3 class="text-base md:text-lg font-semibold text-gray-900 group-hover:text-indigo-800 pr-2">
              ¿Qué época del año es mejor para impermeabilizar?
            </h3>
          </div>
          
          <svg class="w-5 h-5 md:w-6 md:h-6 shrink-0 transition-transform duration-300 group-open:rotate-180 text-indigo-600"
               fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </summary>
        
        <div class="px-4 md:px-5 pb-4 md:pb-5 pt-2 border-t border-indigo-100">
          <div class="flex items-start gap-4">
            <img src="https://cdn-icons-png.flaticon.com/512/619/619034.png" 
                 alt="Icono calendario"
                 class="hidden md:block w-8 h-8 object-contain opacity-75">
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
              <span class="font-medium text-indigo-600">Recomendación:</span> 
              Con sistemas de pintura impermeabilizante, se recomienda los primeros 6 meses del año, 
              cuando el clima es más apto. Evitar temporadas de lluvias intensas o temperaturas extremas.
            </p>
          </div>
        </div>
      </details>

      <!-- Pregunta 2 con imagen -->
      <details class="group rounded-xl bg-white hover:bg-indigo-50 border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 [&_summary::-webkit-details-marker]:hidden">
        <summary class="flex items-center gap-4 p-4 md:p-5 cursor-pointer">
          <div class="hidden md:flex flex-shrink-0 w-12 h-12 bg-indigo-100 rounded-lg items-center justify-center group-hover:bg-indigo-200 transition-colors">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          
          <div class="flex-1">
            <h3 class="text-base md:text-lg font-semibold text-gray-900 group-hover:text-indigo-800 pr-2">
              ¿Cómo debo cotizar la mano de obra de impermeabilización?
            </h3>
          </div>
          
          <svg class="w-5 h-5 md:w-6 md:h-6 shrink-0 transition-transform duration-300 group-open:rotate-180 text-indigo-600"
               fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </summary>
        
        <div class="px-4 md:px-5 pb-4 md:pb-5 pt-2 border-t border-indigo-100">
          <div class="flex items-start gap-4">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135679.png" 
                 alt="Icono cotización"
                 class="hidden md:block w-8 h-8 object-contain opacity-75">
            <div class="space-y-2">
              <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                <span class="font-medium text-indigo-600">Factores clave:</span> 
                Por calidad de producto y respaldo del fabricante. Siempre considere:
              </p>
              <ul class="list-disc pl-4 text-gray-600 text-sm md:text-base">
                <li>Experiencia del proveedor</li>
                <li>Garantía ofrecida</li>
                <li>Preparación de superficie incluida</li>
              </ul>
            </div>
          </div>
        </div>
      </details>

      <!-- Ejemplo de pregunta con imagen de fondo -->
      <details class="group rounded-xl bg-white hover:bg-indigo-50 border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 [&_summary::-webkit-details-marker]:hidden">
        <summary class="flex items-center gap-4 p-4 md:p-5 cursor-pointer relative overflow-hidden">
          <div class="hidden md:block absolute right-0 top-0 w-24 h-24 opacity-10">
            <img src="https://static.thenounproject.com/png/1723677-200.png" 
                 alt="Patrón decorativo"
                 class="w-full h-full object-cover">
          </div>
          
          <div class="hidden md:flex flex-shrink-0 w-12 h-12 bg-indigo-100 rounded-lg items-center justify-center group-hover:bg-indigo-200 transition-colors">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          
          <div class="flex-1">
            <h3 class="text-base md:text-lg font-semibold text-gray-900 group-hover:text-indigo-800 pr-2">
              ¿Ofrecen garantía en sus trabajos?
            </h3>
          </div>
          
          <svg class="w-5 h-5 md:w-6 md:h-6 shrink-0 transition-transform duration-300 group-open:rotate-180 text-indigo-600"
               fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </summary>
        
        <div class="px-4 md:px-5 pb-4 md:pb-5 pt-2 border-t border-indigo-100">
          <div class="flex items-start gap-4">
            <div class="hidden md:block w-8 h-8 bg-indigo-100 rounded-lg p-1.5">
              <img src="https://cdn-icons-png.flaticon.com/512/5906/5906790.png" 
                   alt="Garantía"
                   class="w-full h-full object-contain">
            </div>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
              <span class="font-medium text-indigo-600">Garantía total:</span> 
              Todos nuestros trabajos incluyen garantía de 2 a 5 años según el sistema aplicado, 
              con seguimiento técnico anual incluido.
            </p>
          </div>
        </div>
      </details>
    </div>
  </div>
</section>

{{-- Sección de contacto --}}
<section class="relative min-h-screen mb-16 md:mb-32" data-bg-color="#fbe9e7" style="background: linear-gradient(to right, #fbe9e7 50%, white 50%);">
  <!-- Fondo decorativo responsive -->
  <div 
  data-aos="zoom-in-right"
  data-aos-delay="300"
  data-aos-duration="800"
  data-aos-easing="ease-in-sine"
  class="hidden md:block absolute left-0 top-0 h-full w-full md:w-1/2 
  bg-[url('https://images.unsplash.com/photo-1600585154526-990dced4db0d')] bg-cover bg-center opacity-25 z-0"></div>

  <!-- Contenedor principal responsive -->
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12 z-10">
      <div class="bg-white w-full md:ml-auto md:w-[90%] lg:w-3/5 xl:w-1/2 p-4 sm:p-6 md:p-8
      border-2 md:border-4 border-blue-500 rounded-lg
      shadow-md md:shadow-lg bg-grey-50">
      <form class="w-full" id="contact-form" method="POST" action="{{ route('contact.send') }}">
        @csrf  
            <div class="space-y-12">
                <!-- Encabezado -->
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-2xl font-bold text-gray-900 text-center">Completa el Formulario</h2>
                    <p class="mt-4 text-sm text-gray-600 text-center">
                        Déjanos tus datos y un experto en impermeabilización te contactará
                    </p>
                </div>

                <!-- Campos del formulario -->
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <!-- Nombre -->
                        <div class="sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <div class="mt-2">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" 
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    required>
                            </div>
                        </div>

                        <!-- Apellidos -->
                        <div class="sm:col-span-3">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Apellidos</label>
                            <div class="mt-2">
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" 
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" 
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                                    required>
                            </div>
                        </div>

                        <!-- Teléfono -->
                        <div class="sm:col-span-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <div class="mt-2">
                                <input id="phone" name="phone" type="tel" autocomplete="tel" 
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    pattern="[0-9]{9,15}" 
                                    required>
                            </div>
                        </div>

                        <!-- Mensaje -->
                        <div class="col-span-full">
                            <label for="message" class="block text-sm font-medium text-gray-700">Detalles del problema</label>
                            <div class="mt-2">
                                <textarea id="message" name="message" rows="4" 
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Descríbenos tu situación" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones de acción -->
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold text-gray-900 hover:text-gray-700">Cancelar</button>
                    <button id="submit-button" type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Enviar Solicitud
                    </button>
                </div>
            </div>
        </form>
      </div>

      <!-- CTA Responsive -->
      <div 
          data-aos="flip-up"
          data-aos-delay="300"
          data-aos-duration="800"
          data-aos-easing="ease-in-sine"
          class="mt-6 md:mt-8 p-4 relative md:absolute z-50 left-0 md:left-1/2 bottom-0 transform md:-translate-x-1/2 translate-y-0 md:translate-y-1/2 w-full md:w-3/4 lg:w-1/2">
          <div class="max-w-xs mx-auto px-2 sm:px-4 bg-white rounded-xl shadow-xl border border-gray-100 
              min-w-[300px] sm:min-w-[400px] md:min-w-[500px] transition-all duration-500 hover:scale-105 hover:bg-blue-100">
              <div class="relative p-3 sm:p-4 md:p-6">
                  <div class="text-center space-y-2 md:space-y-3">
                      <h2 class="text-base md:text-lg font-semibold text-gray-800">
                          ¿Problemas de humedad?<br>
                          <span class="block mt-1 text-xs md:text-sm text-blue-600">
                              Llama al<br>55 6967 5322
                          </span>
                      </h2>
                      
                      <div class="flex flex-col sm:flex-row gap-2 justify-center">
                          <a href="https://wa.me/+5215569675322" 
                              class="inline-flex items-center justify-center gap-2 px-3 py-2 sm:px-4 sm:py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg text-xs sm:text-sm transition-all">
                              <span class="fa-brands fa-whatsapp"></span>
                              WhatsApp
                          </a>
                          
                          <a href="tel:5569675322" 
                              class="inline-flex items-center justify-center gap-2 px-3 py-2 sm:px-4 sm:py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-xs sm:text-sm transition-all">
                              <span class="fa-solid fa-phone"></span>
                              Llamar
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

</body>
</html>
@endsection