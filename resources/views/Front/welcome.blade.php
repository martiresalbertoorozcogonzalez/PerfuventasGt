@extends('layouts.app')

@section('content')

{{-- Seccion de Header --}}
<section class="flex flex-col md:flex-row justify-between py-24 px-10 bg-white text-indigo-700">
  <div class="text-center mb-10">
    <h2 class="text-4xl md:text-8xl text-indigo-900 mb-6 animate-pulse">Perfuventas Guatemala</h2>
    <p class="text-red-400 font-bold mb-6 text-2xl">Tienda en linea Perfumeria Original</p>

  </div>
  <div>
     <img class="rounded" src="https://images.unsplash.com/photo-1557827983-012eb6ea8dc1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80" alt="PerfuVentas precentacion">
  </div>
</section>

{{-- Seccion de Submenu --}}
<section class="bg-red-300 px-8 py-8">

  
  <div class="flex flex-col md:flex-row justify-between text-center">
    

      <a class="text-lg text-white hover:text-indigo-600" href="">Inicio</a>
      <a class="text-lg text-white hover:text-indigo-600" href="">Fragancias</a>
      <a class="text-lg text-white hover:text-indigo-600" href="">Marcas</a>
      <a class="text-lg text-white hover:text-indigo-600" href="">Estuches</a>
      <a class="text-lg text-white hover:text-indigo-600" href="">Quienes Somos</a>
      <a class="text-lg text-white hover:text-indigo-600" href="">Contacto</a> 

      <div>
      
        <label class="text-lg text-white hover:text-indigo-600 font" for="">Buscar</label>
      
        <input class="text-center rounded" type="search" name="" id="" placeholder="Perfume">

      </div>

  </div>
 

</section>

{{-- Seccion de nuestros servicios --}}
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
   
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <img class="mr-3" src="{{ asset('/img/cart-full.svg') }}" alt="">
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-indigo-500 text-lg title-font font-medium mb-3">Tienda en Linea</h2>
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
          </a>
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <img class="mr-4" src="{{ asset('/img/handshake.svg') }}" alt="">
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-indigo-500 text-lg title-font font-medium mb-3">Pago contra entrega</h2>
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
          
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <img class="mr-4" src="{{ asset('/img/delivery.svg') }}" alt="">
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-indigo-500 text-lg title-font font-medium mb-3">Envio Gratis</h2>
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
          
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Seccion de Ultimo perfumes --}}
<section class="mx-auto">
  
  <div class="flex justify-center text-center mt-5">
    <h1 class="text-4xl text-indigo-500 font-bold">-Ultimos perfumes-</h1>
  </div>
  
  <div class="px-5 py-10">

    
    <div class="flex flex-wrap justify-center text-center gap-3">
      @foreach ($perfumes as $item)
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="/storage/{{ $item->imagen_perfume }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $item->categoria->nombre }}</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $item->titulo }}</h2>
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $item->genero->nombre }}</h3>
          <p class="mt-1">Q{{ $item->precio }}</p>
        </div>
      </div>
      
      @endforeach
      
    </div>

  </div>

</section>

{{-- Seccion de perfumes de mujer --}}
<section class="mx-auto">
  
  <div class="flex justify-center mt-5">
    <h1 class="text-4xl text-indigo-500 font-bold">-Perfumes de mujer-</h1>
  </div>
  
  <div class="px-5 py-10">
    <div class="flex flex-wrap justify-center text-center gap-3">
      @foreach ($perfumesdemujer as $mujer)
          
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="/storage/{{ $mujer->imagen_perfume }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $mujer->categoria->nombre }}</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">{{$mujer->titulo }}}</h2>
          <p class="mt-1">{{ $mujer->precio }}</p>
        </div>
      </div>

      @endforeach

    </div>

  </div>

</section>

{{-- Seccion de perfumes de hombre --}}
<section class="mx-auto">
  
  <div class="flex justify-center mt-5">
    <h1 class="text-4xl text-indigo-500 font-bold">-Perfumers de Hombre-</h1>
  </div>
  
  <div class="px-5 py-10">
    <div class="flex flex-wrap justify-center text-center gap-3">
      @foreach ($perfumesdehombre as $hombre)
          
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="/storage/{{ $hombre->imagen_perfume }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $hombre->categoria->nombre }}</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $hombre->titulo }}</h2>
          <p class="mt-1">{{ $hombre->precio }}</p>
        </div>
      </div>

      @endforeach

    </div>

  </div>

</section>

{{-- Seccion de estuches --}}
<section class="mx-auto">
  
  <div class="flex justify-center mt-5">
    <h1 class="text-4xl text-indigo-500 font-bold">-Estuches-</h1>
  </div>
  
  <div class="px-5 py-10">
    <div class="flex flex-wrap justify-center text-center gap-3">
      @foreach ($estuches as $estuche)
          
      
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="/storage/{{ $estuche->imagen_perfume }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $estuche->categoria->nombre }}</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $estuche->titulo }}</h2>
          <p class="mt-1">{{ $estuche->precio }}</p>
        </div>
      </div>

      @endforeach

    </div>

  </div>

</section>

{{-- Seccion de llamado a la accion o publicidad --}}
<section class="bg-red-300 flex flex-col md:flex-row justify-between px-20 py-8">

  <h1 class="text-white text-2xl text-center font-bold mt" >Tienda en linea</h1>
  <h1 class="text-white text-2xl text-center font-bold mt-3" >Pago contra entrega</h1>
  <h1 class="text-white text-2xl text-center font-bold mt-3" >Envio gratis</h1>

</section>

{{-- Seccion restimonios de clientes --}}
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/2 w-full">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
              <span class="text-gray-500 text-sm">UI DEVELOPER</span>
            </span>
          </a>
        </div>
      </div>
      <div class="p-4 md:w-1/2 w-full">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Alper Kamu</span>
              <span class="text-gray-500 text-sm">DESIGNER</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Seccion del Footer --}}
<footer class="bg-red-300 text-gray-200 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex flex-col md:flex-row title-font font-medium items-center md:justify-start justify-center text-gray-200">
      <img src="{{ asset('/img/Perfuventas.png') }}" alt="" width="60">
      <span class="ml-3 text-xl text-white font-bold">PerfuventasGuatemala</span>
    </a>
    <p class="text-sm text-white sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4 font-bold">© 2022 PerfuventasGuatemala
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-white">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-white">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-white">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-white">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

@endsection