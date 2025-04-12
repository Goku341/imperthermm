<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Impertherm</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/animations.css') }}" rel="stylesheet">
    <style>
        [x-cloak] { display: none !important; }
    </style>
        <style>
            body {
                transition: background-color 0.8s ease;
                min-height: 100vh;
            }
            
            .seccion {
                min-height: 100vh;
                padding: 4rem 2rem;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
        </style>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/animations.css', 'resources/js/animations1.css', 'resources/js/boostrap.js',
    'resources/js/carrusel.js', 'resources/js/funcions.js'])
</head>
<body  x-data>
    <header class="bg-gray-900">
        <div class="container mx-auto flex justify-between items-center py-4 px-6" id="inicio">
          <!-- Logo -->
          <a href="#inicio" class="flex items-center">
            <img src="{{ asset('c:\impertherm2\impertherm\resources\images\logo.png') }}" alt="Logo" class="h-10">
          </a>
      
          <!-- Menú de navegación para escritorio -->
          <nav class="hidden md:flex space-x-6">
            <a href="{{ url('/nosotros') }}" class="relative text-white hover:text-gray-400 group">
              Sobre Nosotros
              <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="{{ url('/servicios') }}" class="relative text-white hover:text-gray-400 group">
              Nuestros servicios
              <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="{{ url('/proyectos') }}" class="relative text-white hover:text-gray-400 group">
              Proyectos
              <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="{{ url('/contactanos') }}" class="relative text-white hover:text-gray-400 group">
              Contactanos
              <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
            </a>
            <!-- Redes Sociales -->
            <div class="flex space-x-4 text-xl text-gray-700">
              <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-facebook hover:text-blue-600"></i>
              </a>
              <a href="https://www.x.com" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-twitter-x hover:text-black"></i>
              </a>
              <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-instagram hover:text-pink-500"></i>
              </a>
              <a href="https://www.tiktok.com" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-tiktok hover:text-black"></i>
              </a>
            </div>
          </nav>
      
          <!-- Botón de menú móvil -->
        <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
          <img src="{{ asset('images/icons/menu.png') }}" alt="Menú" class="h-8 w-8">
        </button>
      </div>
    
      <!-- Barra animada -->
      <div id="menu-bar" class="h-1 bg-white-500 hidden transition-all duration-1000"></div>
    
      <!-- Menú móvil -->
      <div id="mobile-menu" class="md:hidden hidden bg-gray-900">
        <nav class="px-6 pb-4 space-y-4">
          <a href="#about" class="block text-white hover:text-gray-400">Sobre nosotros</a>
          <a href="#team" class="block text-white hover:text-gray-400">Nuestros servicios</a>
          <a href="#projects" class="block text-white hover:text-gray-400">Proyectos</a>
          <a href="#contact" class="block text-white hover:text-gray-400">Contactanos</a>
        </nav>
      </div>
      </header> 

    @yield('content')

    <!-- Script para cambio de color -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.seccion');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting) {
                        const color = entry.target.dataset.bgColor;
                        document.body.style.backgroundColor = color;
                    }
                });
            }, {
                threshold: 0.5 // Cuando el 50% de la sección sea visible
            });

            sections.forEach(section => {
                observer.observe(section);
            });
        });

        AOS.init({
            duration: 1000,
            once: true,
            offset: 120,
            easing: 'ease-in-out-quad'
        });
    </script>
</body>
</html>