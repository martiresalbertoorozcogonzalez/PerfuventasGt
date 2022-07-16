@extends('layouts.app')

@section('content')

<section class="text-gray-600 body-font relative">
  
  <div class="flex flex-row justify-center items-center mt-10 -mb-20">
  <h2 class="text-5xl text-indigo-500 font-bold">PerfuventasGuatemala</h2>
  </div>

  <div class="container px-5 py-24 mx-auto flex flex-col md:flex-row">
  
    <div class="lg:w-2/3 md:w-1/2 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-center relative">
      <img src="https://images.unsplash.com/photo-1557827983-012eb6ea8dc1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80" alt="">
    </div>

    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">

      <div class="">
        <h2 class="text-gray-900 text-3xl mb-1 font-medium title-font">Contactanos</h2>
        {{-- <p class="leading-relaxed mb-5 text-gray-600">Envianos tus pedidos y dudas sera un gusto atenderte</p> --}}
      </div>
    <form method="POST" action="{{ route('contact') }}">

      @csrf
      
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Nombre</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        
        @error('name')
        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
            <strong class="font-bold">Error!!</strong> 
            <span class="block">{{$message}}</span>
        </div>
         @enderror()

      </div>
      <div class="relative mb-4">
        <label for="apellido" class="leading-7 text-sm text-gray-600">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      
        @error('apellido')
        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
            <strong class="font-bold">Error!!</strong> 
            <span class="block">{{$message}}</span>
        </div>
        @enderror()

      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      
        @error('email')
        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
            <strong class="font-bold">Error!!</strong> 
            <span class="block">{{$message}}</span>
        </div>
        @enderror()

      </div>
      <div class="relative mb-4">
        <label for="subject" class="leading-7 text-sm text-gray-600">Motivo</label>
        <input type="text" id="subject" name="subject" subject="subject" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      
        @error('subject')
        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
            <strong class="font-bold">Error!!</strong> 
            <span class="block">{{$message}}</span>
        </div>
        @enderror()

      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Mensaje</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      
        @error('message')
        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
            <strong class="font-bold">Error!!</strong> 
            <span class="block">{{$message}}</span>
        </div>
        @enderror()
      
      </div>
    
      <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-400 rounded text-lg">Enviar mensaje</button>
      
    </form>
    
    </div>

  </div>
</section>








    
{{-- Seccion de contacto --}}
{{-- <section class="bg-white text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-6xl text-4xl font-medium title-font mb-4 text-indigo-500">Contactanos</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Envianos tus pedidos o dudas con gusto te responderemeos a la brevedad posible</p>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="nombre" class="leading-7 text-sm text-gray-600">Nombre</label>
              <input type="text" id="nombre" nombre="nombre" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
              <label for="message" class="leading-7 text-sm text-gray-600">Mensaje</label>
              <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
          </div>
          <div class="p-2 w-full">
            <button class="flex mx-auto text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-200 rounded text-lg">Enviar mensaje</button>
          </div>
          
        </div>
      </div>
  </div>
</section> --}}
  

@endsection