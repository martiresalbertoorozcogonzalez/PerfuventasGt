@extends('layouts.app')

@section('content')

{{-- Seccion de Header --}}
<section class="flex flex-col md:flex-row justify-between py-24 px-10 bg-white text-indigo-700">
  <div class="text-center mb-10">
    <h2 class="text-4xl md:text-8xl text-indigo-500 mb-6 animate-pulse">Perfuventas Guatemala</h2>
    <p class="text-red-400 font-bold mb-6 text-2xl">Tienda en linea de Perfumeria Original</p>

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
    <h1 class="text-4xl text-indigo-500 font-bold">-Ultimos-</h1>
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

{{-- Seccion de llamado a la accion o publicidad --}}
<section class="bg-red-300 flex flex-col md:flex-row justify-between px-20 py-8">

  <h1 class="text-white text-2xl text-center font-bold mt" >Tienda en linea</h1>
  <h1 class="text-white text-2xl text-center font-bold mt-3" >Pago contra entrega</h1>
  <h1 class="text-white text-2xl text-center font-bold mt-3" >Envio gratis</h1>

</section>

{{-- Seccion de contacto --}}
<section class="bg-white text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-6xl text-4xl font-medium title-font mb-4 text-indigo-500">Contactanos</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Envianos tus dudas y pedidos con gusto te responderemeos</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="subject" class="leading-7 text-sm text-gray-600">Motivo</label>
            <input type="text" id="subject" name="subject" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-200 rounded text-lg">Enviar mensaje</button>
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