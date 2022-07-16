@extends('layouts.app')


@section('content')


<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      @foreach ($quiensomos as $item)
          
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="sm:text-5xl text-2xl font-medium title-font mb-2 text-gray-900">{{ $item->titulo }}</h1>
          <div class="h-1 w-20 bg-indigo-500 rounded"></div>
        </div>
        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
          {!! $item->descripcion !!}
        </p>
      </div>
      
      @endforeach

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

    </div>
  </section>

    
@endsection