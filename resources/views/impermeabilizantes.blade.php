@extends('layouts.app')

@section('content')



<section class="seccion" data-bg-color="#f0f4f8">
        <!-- Botón WhatsApp Flotante -->
        <div class="fixed bottom-6 right-6 z-50 animate-bounce">
            <a href="https://wa.me/+5215569675322?text=Hola%20SIBIMEX,%20necesito%20información%20sobre%20impermeabilización"
            target="_blank"
            class="flex items-center justify-center w-16 h-16 rounded-full bg-[#25D366] hover:bg-[#128C7E] text-white shadow-xl transition-all duration-300">
            <svg viewBox="0 0 32 32" class="w-8 h-8 fill-current text-white">
                <path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"/>
            </svg>
            </a>
        </div>
        <!-- Contenido sección 1 -->
        <div class="relative bg-gradient-to-r from-blue-50 to-gray-50 rounded-xl shadow-lg overflow-hidden md:flex md:items-center md:gap-8 p-6 md:p-12 my-12">
            <!-- Imagen decorativa -->
            <div class="md:w-1/2 lg:w-2/5 mb-8 md:mb-0 transform hover:scale-105 transition-transform duration-300">
                <img 
                    src="{{ asset('images/descarga3.jpg') }}" 
                    alt="Equipo de SIBIMEX aplicando impermeabilizante"
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

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Encabezado -->
            <div class="text-center mb-14">
                <h6 class="font-bold uppercase tracking-[4px] text-gray-500 mb-5">Our Speakers</h6>
                <h1 class="text-4xl font-bold text-[#26264b]">Why Choose Us</h1>
            </div>
    
            <!-- Grid de Servicios -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Item 1 -->
                <div class="flex items-start p-6 rounded-xl hover:shadow-lg transition-all duration-300 space-x-4 my-10"
                    data-aos="fade-up" 
                    data-aos-delay="200" 
                    data-aos-duration="400"
                    x-data="{ hover: false }"
                    @mouseenter="hover = true"
                    @mouseleave="hover = false"
                    :style="hover ? 'transform: scale(1.02);' : ''">
                    <img class="w-16 h-16 flex-shrink-0 transition-transform duration-300" 
                        src="{{ asset('assets/images/service1.png') }}" 
                        alt="Web Development">
                    <div class="flex-1">
                        <h5 class="text-lg font-semibold text-[#26264b] border-b-2 border-[#e7e7e7] pb-2 mb-3">
                            Web Development
                        </h5>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                        </p>
                    </div>
                </div>
    
                <!-- Item 2 -->
                <div class="flex items-start p-6 rounded-xl hover:shadow-lg transition-all duration-300 space-x-4 my-10"
                    data-aos="fade-up" 
                    data-aos-delay="400" 
                    data-aos-duration="600"
                    x-data="{ hover: false }"
                    @mouseenter="hover = true"
                    @mouseleave="hover = false"
                    :style="hover ? 'transform: scale(1.02);' : ''">
                    <img class="w-16 h-16 flex-shrink-0" 
                        src="{{ asset('assets/images/service2.png') }}" 
                        alt="Testing for perfection">
                    <div class="flex-1">
                        <h5 class="text-lg font-semibold text-[#26264b] border-b-2 border-[#e7e7e7] pb-2 mb-3">
                            Testing for perfection
                        </h5>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                        </p>
                    </div>
                </div>
    
                <!-- Item 3 -->
                <div class="flex items-start p-6 rounded-xl hover:shadow-lg transition-all duration-300 space-x-4 my-10"
                    data-aos="fade-up" 
                    data-aos-delay="600" 
                    data-aos-duration="800"
                    x-data="{ hover: false }"
                    @mouseenter="hover = true"
                    @mouseleave="hover = false"
                    :style="hover ? 'transform: scale(1.02);' : ''">
                    <img class="w-16 h-16 flex-shrink-0" 
                        src="{{ asset('assets/images/service3.png') }}" 
                        alt="Discussion of the idea">
                    <div class="flex-1">
                        <h5 class="text-lg font-semibold text-[#26264b] border-b-2 border-[#e7e7e7] pb-2 mb-3">
                            Discussion of the idea
                        </h5>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                        </p>
                    </div>
                </div>
    
                <!-- Items restantes (repetir misma estructura) -->
                <!-- ... -->
            </div>
        </div>
    </section>



{{-- Sección de impermeabilización --}}
    <section class="seccion" data-bg-color="#f0f4f8">
        <div class="overflow-hidden py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pt-4 lg:pr-8">
                <div class="lg:max-w-lg">
                    <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-3xl">
                        ¡Protege tu hogar o negocio 
                        de las filtraciones! Impermeabilizaciones 
                        duraderas y confiables.
                    </p>
                    <p class="mt-6 text-lg/8 text-gray-600">
                        Dile adiós a las goteras, la humedad y el moho. Somos expertos 
                        en impermeabilización con materiales de alta calidad y técnicas 
                        innovadoras. ¡Solicita tu presupuesto sin compromiso!
                    </p>
                    <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-gray-900">
                        <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z" clip-rule="evenodd" />
                        </svg>
                            Impermeabilización líquida.
                        </dt>
                        <dd class="inline"> 
                            Protegemos tu hogar o negocio de goteras y filtraciones 
                            con sistemas de impermeabilización de alta resistencia 
                            y durabilidad. Utilizamos membranas asfálticas, acrílicas, 
                            prefabricadas y más, adaptándonos a las características de 
                            tu techo.
    
                        </dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-gray-900">
                        <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
                        </svg>
                        Impermeabilización de Muros
                        </dt>
                        <dd class="inline">
                            Evita la aparición de humedad, salitre y moho en tus
                            muros con nuestros tratamientos impermeabilizantes 
                            especializados. Protegemos tanto muros interiores 
                            como exteriores.
                        </dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-gray-900">
                        <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                            <path fill-rule="evenodd" d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z" clip-rule="evenodd" />
                        </svg>
                        Impermeabilización de Cimentaciones
                        </dt>
                        <dd class="inline">
                            Asegura la integridad estructural de tu edificación desde sus 
                            cimientos. Ofrecemos soluciones para prevenir la humedad 
                            ascendente y las filtraciones en sótanos y cimentaciones.
                        </dd>
                        </div>
                    </dl>

                    </div>

                </div>
                <img 
                src="{{ asset('images/descarga.jpg') }}" 
                alt="Imagen"
                data-aos="zoom-in"
                data-aos-easing="ease-in-out"
                data-aos-delay="200"
                class="w-[780px] h-[400px]"
                >
            </div>
            </div>
        </div> 
    </section>
{{-- Sección de productos --}}
    <section class="seccion" data-bg-color="#BBA9BB">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 transform -translate-x-10" >
            
            <div class="mx-auto max-w-2xl lg:text-center">
                
            <h2 class="text-base/7 font-semibold text-indigo-600"> </h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance">
                Tipos de Impermeabiliazantes que tenemos para ti!!</p>
            <p class="mt-6 text-lg/8 text-gray-600">
                <div class="flex justify-center my-8">
                    <div class="w-4/5 border-t border-gray-200"></div>
                </div>
                En SIBIMEX contamos con una amplia gama de productos para impermeabilización, 
                adaptándonos a tus necesidades específicas. Desde membranas líquidas hasta 
                sistemas de inyección, tenemos la solución perfecta para cada proyecto.
            </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div 
                        class="group relative bg-white rounded-xl shadow-lg p-8 transition-all duration-500 hover:bg-blue-50 hover:shadow-xl hover:-translate-y-2"
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-easing="ease-in-out"
                    >
                        <!-- Elemento decorativo hover -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 rounded-bl-full"></div>
                        </div>
                
                        <!-- Contenido -->
                        <div class="relative space-y-6">
                            <div class="w-16 h-16 rounded-lg bg-blue-600 mb-6 transform group-hover:rotate-12 transition-transform"></div>
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-800 transition-colors">
                                Impermeabilizante Acrílico para Techos y Muros                            </h3>
                            <p class="text-gray-600 group-hover:text-gray-800 transition-colors">
                                Descripción: Líquido elastomérico de base acuosa, ideal para superficies de concreto, lámina y fibrocemento. Forma una película flexible y resistente a los rayos UV.
                                Aplicación: Techos planos, terrazas, muros exteriores y cisternas.
                                Beneficios:
                                
                                Fácil aplicación con brocha o rodillo.
                                
                                Resistente a grietas por cambios térmicos.
                                
                                Disponible en varios colores (blanco, gris, terracota).
                            </p>
                            <button class="mt-4 px-6 py-2 bg-blue-100 text-blue-800 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                Ver Proyectos
                            </button>
                        </div>
                    </div>
                
                    <!-- Contenedor 2 -->
                    <div 
                        class="group relative bg-white rounded-xl shadow-lg p-8 transition-all duration-500 hover:bg-orange-50 hover:shadow-xl hover:-translate-y-2"
                        data-aos="fade-up"
                        data-aos-delay="400"
                        data-aos-easing="ease-in-out"
                    >
                        <!-- Elemento decorativo hover -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-orange-100 rounded-tr-full"></div>
                        </div>
                
                        <!-- Contenido -->
                        <div class="relative space-y-6">
                            <div class="w-16 h-16 rounded-lg bg-orange-600 mb-6 transform group-hover:-rotate-12 transition-transform"></div>
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-orange-800 transition-colors">
                                Membrana Líquida para Cubiertas y Jardineras
                            </h3>
                            <p class="text-gray-600 group-hover:text-gray-800 transition-colors">
                                Descripción: Membrana líquida de poliuretano de alto rendimiento, perfecta para áreas expuestas a humedad constante.
                                Aplicación: Jardineras, balcones, piscinas enterradas y cubiertas ajardinadas.
                                Beneficios:
                                
                                Adherencia superior en superficies irregulares.
                                
                                Impermeable al 100% desde la primera capa.
                                
                                Permite tránsito peatonal después del secado.
                            </p>
                            <button class="mt-4 px-6 py-2 bg-orange-100 text-orange-800 rounded-full group-hover:bg-orange-600 group-hover:text-white transition-colors">
                                Ver Tecnología
                            </button>
                        </div>
                    </div>
                
                    <!-- Contenedor 1 -->
                    <div 
                        class="group relative bg-white rounded-xl shadow-lg p-8 transition-all duration-500 hover:bg-blue-50 hover:shadow-xl hover:-translate-y-2"
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-easing="ease-in-out"
                    >
                        <!-- Elemento decorativo hover -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 rounded-bl-full"></div>
                        </div>

                        <!-- Contenido -->
                        <div class="relative space-y-6">
                            <div 
                            class="bg-cover bg-center opacity-25 z-0 
                            w-16 h-16 rounded-lg bg-[url('https://images.unsplash.com/photo-1600585154526-990dced4db0d')] mb-6 transform group-hover:rotate-12 transition-transform"></div>

                            
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-800 transition-colors">
                                Impermeabilizante Cristalizante para Concreto

                            </h3>
                            <p class="text-gray-600 group-hover:text-gray-800 transition-colors">
                                Descripción: Producto en polvo que penetra en el concreto, sellando poros y generando una barrera contra la humedad ascendente.
                                Aplicación: Cimientos, sótanos, estacionamientos y estructuras enterradas.
                                Beneficios:
                                
                                Aumenta la vida útil del concreto.
                                
                                Ideal para obras nuevas o rehabilitación.
                                
                                No altera la apariencia de la superficie.
                            </p>
                            <button class="mt-4 px-6 py-2 bg-blue-100 text-blue-800 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                Ver Proyectos
                            </button>
                        </div>
                    </div>

                    <!-- Contenedor 2 -->
                    <div 
                        class="group relative bg-white rounded-xl shadow-lg p-8 transition-all duration-500 hover:bg-orange-50 hover:shadow-xl hover:-translate-y-2"
                        data-aos="fade-up"
                        data-aos-delay="400"
                        data-aos-easing="ease-in-out"
                    >
                        <!-- Elemento decorativo hover -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-orange-100 rounded-tr-full"></div>
                        </div>

                        <!-- Contenido -->
                        <div class="relative space-y-6">
                            <div class="w-16 h-16 rounded-lg bg-orange-600 mb-6 transform group-hover:-rotate-12 transition-transform"></div>
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-orange-800 transition-colors">
                                Membrana Líquida para Cubiertas y Jardineras
                            </h3>
                            <p class="text-gray-600 group-hover:text-gray-800 transition-colors">
                                Descripción: Sellador en pasta de alto espesor, diseñado para reparar grietas y sellar juntas de dilatación en techos o losas.
                                Aplicación: Juntas en construcciones, fisuras en paredes, uniones entre muros y techos.
                                Beneficios:
                                
                                No se agrieta ni encoge.
                                
                                Compatible con morteros y pinturas.
                                
                                Resistente a lluvias intensas en solo 2 horas.
                            </p>
                            <button class="mt-4 px-6 py-2 bg-orange-100 text-orange-800 rounded-full group-hover:bg-orange-600 group-hover:text-white transition-colors">
                                Ver Tecnología
                            </button>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
</section>

{{-- Sección de contacto --}}
<section class="relative min-h-screen" data-bg-color="#fbe9e7" style="background: linear-gradient(to right, #fbe9e7 50%, white 50%);">
    <!-- Fondo decorativo para desktop -->
    <div 
    data-aos="zoom-in-right"
    data-aos-delay="300"
    data-aos-duration="800"
    data-aos-easing="ease-in-sine"
    class="hidden md:block absolute left-0 top-0 h-full w-1/2 
    bg-[url('https://images.unsplash.com/photo-1600585154526-990dced4db0d')] bg-cover bg-center opacity-25 z-0"></div>

    <!-- Contenedor principal del formulario -->
    <div class="relative w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 z-10">
        <div class="bg-white md:ml-auto md:w-1/2 lg:w-2/5 xl:w-2/3 p-6 sm:p-8
        border-4 border-blue-500 rounded-lg
        shadow-lg bg-grey-50">
            <form class="w-full" method="POST">
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
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <div class="mt-2">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" 
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                            </div>

                            <!-- Apellidos -->
                            <div class="sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Apellidos</label>
                                <div class="mt-2">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" 
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
                        <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Enviar Solicitud
                        </button>
                    </div>
                </div>
            </form>
        </div>


        <!-- Componente CTA Pequeño y Posicionable --> <!-- Contenedor padre -->
    <div 
        data-aos="flip-up"
        data-aos-delay="300"
        data-aos-duration="800"
        data-aos-easing="ease-in-sine"
        class="mt-8 p-6 absolute z-50 left-1/2 bottom-0 transform -translate-x-1/2 translate-y-1/2 w-1/2 h-32"><!-- Posición inicial ejemplo -->
        <div x-intersect:enter="animated = true": class=" animated ? 'animate-flip-left' : 'opacity-0' 
        max-w-xs mx-auto px-2 sm:px-4 bg-white rounded-xl shadow-xl border border-gray-100 
        min-w-[600px] sm:min-w-[600px] transition-all duration-500 hover:scale-105 hover:bg-blue-100">
            <div class="relative p-4 sm:p-6">
                <!-- Contenido reducido -->
                <div class="text-center space-y-3">
                    <h2 class="text-lg font-semibold text-gray-800">
                        ¿Problemas de humedad?<br>
                        <span class="block mt-1 text-sm text-blue-600">
                            Llama al<br>55 6967 5322
                        </span>
                    </h2>
                    
                    <!-- Botones compactos -->
                    <div class="flex flex-col gap-2">
                        <a href="https://wa.me/+5215569675322" 
                            class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg text-sm transition-all">
                            <span class="fa-brands fa-whatsapp"></span>
                            WhatsApp
                        </a>
                        
                        <a href="tel:5569675322" 
                            class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm transition-all">
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

@endsection
