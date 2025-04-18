@extends('layouts.app')

@section('title', 'Sobre nosotros')

@section('content')
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">¿Quiénes Somos?</h1>
        <div class="max-w-4xl mx-auto text-gray-700 text-lg leading-relaxed">
            <p class="mb-6">
                En <strong>Imperterm</strong> somos una empresa especializada en brindar soluciones duraderas en impermeabilización para techos, muros, cisternas y más. Contamos con más de 10 años de experiencia ofreciendo servicios de alta calidad a hogares, empresas y constructoras.
            </p>
            <p class="mb-6">
                Nuestro compromiso es garantizar la protección de tus espacios contra filtraciones, humedad y deterioro, utilizando productos de última generación y un equipo técnico certificado.
            </p>
            <p class="mb-6">
                Nos enorgullece ofrecer un trato personalizado, evaluaciones gratuitas y presupuestos sin compromiso, siempre buscando la mejor solución para cada necesidad.
            </p>
        </div>
    </div>
</section>

<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Sobre Nosotros</h2>
  
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <img src="{{ asset('images/nosotros/nosotros.jpg') }}" alt="Nosotros" class="rounded-lg shadow-lg w-full">
        </div>
        <div>
          <h3 class="text-2xl font-semibold text-gray-800 mb-4">Especialistas en Impermeabilización</h3>
          <p class="text-gray-600 leading-relaxed mb-4">
            Somos una empresa dedicada a ofrecer servicios de impermeabilización de alta calidad. Contamos con un equipo profesional y materiales de primer nivel para proteger tu hogar o empresa contra filtraciones y humedad.
          </p>
          <p class="text-gray-600 leading-relaxed">
            Nuestro compromiso es brindar soluciones duraderas, eficientes y adaptadas a las necesidades de cada cliente.
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <div class="grid md:grid-cols-3 gap-12">
        <!-- MISIÓN -->
        <div>
          <i class="bi bi-bullseye text-5xl text-red-600 mb-4"></i>
          <h4 class="text-xl font-bold text-gray-800 mb-2">Misión</h4>
          <p class="text-gray-600">
            Proporcionar servicios de impermeabilización confiables, eficientes y sostenibles que superen las expectativas de nuestros clientes.
          </p>
        </div>
  
        <!-- VISIÓN -->
        <div>
          <i class="bi bi-eye-fill text-5xl text-blue-600 mb-4"></i>
          <h4 class="text-xl font-bold text-gray-800 mb-2">Visión</h4>
          <p class="text-gray-600">
            Ser la empresa líder en impermeabilización a nivel regional, reconocida por nuestra calidad, responsabilidad y tecnología innovadora.
          </p>
        </div>
  
        <!-- VALORES -->
        <div>
          <i class="bi bi-heart-fill text-5xl text-green-600 mb-4"></i>
          <h4 class="text-xl font-bold text-gray-800 mb-2">Valores</h4>
          <ul class="text-gray-600 space-y-1 text-left">
            <li>✔ Compromiso</li>
            <li>✔ Honestidad</li>
            <li>✔ Calidad</li>
            <li>✔ Innovación</li>
            <li>✔ Trabajo en equipo</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">¿Por qué elegirnos?</h2>
        <div class="grid md:grid-cols-3 gap-8 text-center">
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-transform hover:scale-105 group">
                <i class="bi bi-award-fill text-5xl text-indigo-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Experiencia Comprobada</h3>
                <p>Más de una década impermeabilizando techos y superficies con excelentes resultados.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-transform hover:scale-105 group">
                <i class="bi bi-clipboard-check text-5xl text-indigo-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Materiales de Calidad</h3>
                <p>Utilizamos productos certificados que aseguran durabilidad y resistencia a las condiciones climáticas.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-transform hover:scale-105 group">
                <i class="bi bi-wrench text-5xl text-indigo-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Garantía en el Servicio</h3>
                <p>Ofrecemos garantía por escrito en todos nuestros trabajos para tu tranquilidad y confianza.</p>
            </div>
        </div>
    </div>
</section>
@endsection