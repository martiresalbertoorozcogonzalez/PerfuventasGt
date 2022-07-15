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
        <a href="" class="flex justify-center relative rounded overflow-hidden">
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
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-12">
      <div class="p-12 md:w-1/2 flex flex-col items-start">
        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">CATEGORY</span>
        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">Roof party normcore before they sold out, cornhole vape</h2>
        <p class="leading-relaxed mb-8">Live-edge letterpress cliche, salvia fanny pack humblebrag narwhal portland. VHS man braid palo santo hoodie brunch trust fund. Bitters hashtag waistcoat fashion axe chia unicorn. Plaid fixie chambray 90's, slow-carb etsy tumeric. Cray pug you probably haven't heard of them hexagon kickstarter craft beer pork chic.</p>
        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
          <a class="text-indigo-500 inline-flex items-center">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <span class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>1.2K
          </span>
          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
            </svg>6
          </span>
        </div>
        
      </div>
      <div class="p-12 md:w-1/2 flex flex-col items-start">
        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">CATEGORY</span>
        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">Pinterest DIY dreamcatcher gentrify single-origin coffee</h2>
        <p class="leading-relaxed mb-8">Live-edge letterpress cliche, salvia fanny pack humblebrag narwhal portland. VHS man braid palo santo hoodie brunch trust fund. Bitters hashtag waistcoat fashion axe chia unicorn. Plaid fixie chambray 90's, slow-carb etsy tumeric.</p>
        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
          <a class="text-indigo-500 inline-flex items-center">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <span class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>1.2K
          </span>
          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
            </svg>6
          </span>
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