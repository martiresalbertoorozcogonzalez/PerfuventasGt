@extends('layouts.app')


@section('content')

{{-- Seccion de Ultimo perfumes --}}
<section class="mx-auto">
  
    <div class="flex justify-center text-center mt-5">
      <h1 class="text-4xl text-indigo-500 font-bold">-Perfumeria-</h1>
    </div>
    
    <div class="px-5 py-10">
  
      
      <div class="flex flex-wrap justify-center text-center gap-3">
        @foreach ($fragancias as $item)
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
  
    
@endsection