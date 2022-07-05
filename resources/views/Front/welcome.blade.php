@extends('layouts.app')

@section('content')

{{-- Seccion de Header --}}
<section class="flex flex-col md:flex-row justify-between py-24 px-10 bg-white text-indigo-700">
  <div class="mb-10">
    <h2 class="text-4xl md:text-8xl text-indigo-500 mb-6 animate-pulse">Perfuventas Guatemala</h2>
    <p class="text-yellow-500 font-bold mb-6 text-xl">Tienda en linea de Perfumeria Original</p>

  </div>
  <div>
     <img class="rounded" src="https://images.unsplash.com/photo-1557827983-012eb6ea8dc1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80" alt="PerfuVentas precentacion">
  </div>
</section>

{{-- Seccion de Submenu --}}
<section class="bg-red-300 px-8 py-8">

  
  <div class="flex flex-row justify-between text-center">
    

      <a class="text-lg text-indigo-600 hover:text-indigo-200" href="">Inicio</a>
      <a class="text-lg text-indigo-600 hover:text-indigo-200" href="">Fragancias</a>
      <a class="text-lg text-indigo-600 hover:text-indigo-200" href="">Marcas</a>
      <a class="text-lg text-indigo-600 hover:text-indigo-200" href="">Estuches</a>
      <a class="text-lg text-indigo-600 hover:text-indigo-200" href="">Quienes Somos</a>
      <a class="text-lg text-indigo-600 hover:text-indigo-200" href="">Contacto</a> 

      <div>
      
        <label class="text-lg text-indigo-500 hover:text-indigo-200 font" for="">Buscar</label>
      
        <input class="text-center rounded" type="search" name="" id="" placeholder="Perfume">

      </div>

  </div>
 

</section>

{{-- Seccion de Ultimo perfumes --}}
<section class="mx-auto">
  
  <div class="flex justify-center mt-5">
    <h1 class="text-4xl text-indigo-500 font-bold">-Ultimos Perfumes-</h1>
  </div>
  
  <div class="px-5 py-10">
    <div class="flex flex-wrap justify-center text-center gap-3">
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/ejemplo1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/ejemplo1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      
    </div>

  </div>

</section>

{{-- Seccion de novedades --}}
<section class="mx-auto">
  
  <div class="flex justify-center mt-5">
    <h1 class="text-4xl text-indigo-500 font-bold">-Novedades-</h1>
  </div>
  
  <div class="px-5 py-10">
    <div class="flex flex-wrap justify-center text-center gap-3">
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/ejemplo1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/ejemplo1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      
    </div>

  </div>

</section>

{{-- Seccion de favoritas --}}
<section class="mx-auto">
  
  <div class="flex justify-center mt-5">
    <h1 class="text-4xl text-indigo-500 font-bold">-Favoritos-</h1>
  </div>
  
  <div class="px-5 py-10">
    <div class="flex flex-wrap justify-center text-center gap-3">
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/ejemplo1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/ejemplo1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      
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
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/ejemplo1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/ejemplo1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      <div class="lg:w-1/5 md:w-1/2 p-2 w-full">
        <a class="flex justify-center relative rounded overflow-hidden">
          <img alt="ecommerce" class="h-60" src="{{ asset('/img/1.png') }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EUA DE PERFUM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Tribu de Benetton</h2>
          <p class="mt-1">Q750.00</p>
        </div>
      </div>
      
    </div>

  </div>

</section>

{{-- Seccion de contacto --}}
<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-400 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
          <a class="text-pink-500 leading-relaxed">example@email.com</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed">123-456-7890</p>
        </div>
      </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg">Button</button>
      <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
    </div>
  </div>
</section>

{{-- Seccion del Footer --}}
<footer class="bg-red-300 text-gray-200 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-200">
      <img src="{{ asset('/img/Perfuventas.png') }}" alt="" width="60">
      <span class="ml-3 text-xl text-indigo-400 font-bold">PerfuventasGuatemala</span>
    </a>
    <p class="text-sm text-indigo-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4 font-bold">© 2022 PerfuventasGuatemala
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-indigo-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-indigo-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-indigo-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-indigo-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

@endsection