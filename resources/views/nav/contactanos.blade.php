@extends('layouts.app')

@section('title', 'contactos')

@section('content')
<section>
  <div class=" bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Contact sales</h2>
      <p class="mt-2 text-lg/8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim voluptate.</p>
    </div>
    </div>

  {{--Formulario de contacto--}}
  <div class="flex flex-col items-center justify-center py-8 px-4 sm:px-6 lg:px-8">
    <div class="bg-gray-100 w-full md:w-4/5 lg:w-3/5 xl:w-2/3 p-5 sm:p-7 md:p-10
      border-2 md:border-4 border-blue-500 rounded-lg
      shadow-md md:shadow-lg bg-grey-50">
      <form class="w-full" method="POST">
        <div class="space-y-6 md:space-y-12">
            <!-- Encabezado -->
            <div class="border-b border-gray-900/10 pb-6 md:pb-12">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 text-center">Completa el Formulario</h2>
                <p class="mt-2 md:mt-4 text-xs md:text-sm text-gray-600 text-center">
                    Déjanos tus datos y un experto en impermeabilización te contactará
                </p>
            </div>

            <!-- Campos del formulario responsive -->
            <div class="border-b border-gray-900/10 pb-8 md:pb-12">
                <div class="mt-6 md:mt-10 grid grid-cols-1 gap-x-4 gap-y-6 md:gap-x-6 md:gap-y-8">
                    <!-- Nombre y Apellidos en row en desktop -->
                    <div class="flex flex-col md:flex-row gap-4 md:gap-6">
                        <div class="w-full">
                            <label for="first-name" class="block text-sm md:text-base font-medium text-gray-700">Nombre</label>
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" 
                                class="mt-1 md:mt-2 block w-full rounded-md border-2 border-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm md:text-base p-2"
                                required>
                        </div>

                        <div class="w-full">
                            <label for="last-name" class="block text-sm md:text-base font-medium text-gray-700">Apellidos</label>
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" 
                                class="mt-1 md:mt-2 block w-full rounded-md border-2 border-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm md:text-base p-2"
                                required>
                        </div>
                    </div>

                    <!-- Email y Teléfono -->
                    <div class="space-y-6">
                        <div>
                            <label for="email" class="block text-sm md:text-base font-medium text-gray-700">Correo Electrónico</label>
                            <input id="email" name="email" type="email" autocomplete="email" 
                                class="mt-1 md:mt-2 block w-full rounded-md border-2 border-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm md:text-base p-2"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                                required>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm md:text-base font-medium text-gray-700">Teléfono</label>
                            <input id="phone" name="phone" type="tel" autocomplete="tel" 
                                class="mt-1 md:mt-2 block w-full rounded-md border-2 border-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm md:text-base p-2"
                                pattern="[0-9]{9,15}" 
                                required>
                        </div>
                    </div>

                    <!-- Mensaje -->
                    <div>
                        <label for="message" class="block text-sm md:text-base font-medium text-gray-700">Detalles del problema</label>
                        <textarea id="message" name="message" rows="3" 
                                class="mt-1 md:mt-2 block w-full rounded-md border-2 border-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm md:text-base p-2"
                                placeholder="Descríbenos tu situación" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Botones responsive -->
            <div class="mt-4 md:mt-6 flex flex-col-reverse sm:flex-row items-center justify-end gap-4">
                <button type="button" class="w-full sm:w-auto text-sm md:text-base font-semibold text-gray-900 hover:text-gray-700 px-4 py-2">
                    Cancelar
                </button>
                <button type="submit" class="w-full sm:w-auto rounded-md bg-indigo-600 px-6 py-2 text-sm md:text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Enviar Solicitud
                </button>
            </div>
        </div>
      </form>
    </div>
  </div>


</section>
@endsection