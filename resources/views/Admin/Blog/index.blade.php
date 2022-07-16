@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">

    {{-- Botones de Crear y regresar --}}
    <div class="flex flex-row justify-between">
        <div class="flex flex-row my-4">
            <a href="{{ route('home') }}" class="bg-yellow-400 hover:bg-yellow-300 sm:text-sm md:text-lg text-center font-bold p-3 rounded-lg">Regresar</a>
        </div>
    
        <div class="flex flex-row-reverse my-4">
            <a href="{{ route('blog.create') }}" class="bg-yellow-400 hover:bg-yellow-300 sm:text-sm md:text-lg text-center font-bold p-3 rounded-lg">Crear Blog</a>
        </div>
       
    </div>

    {{-- Seccion de portafolio --}}
    <div class="flex flex-wrap -m-4">
        
      {{-- Ac va el Foreach --}}
      @foreach ($blogs as $item)
            
        <div class="p-4 lg:w-1/3">

            <div class="rounded shadow-md relative">
                
                <img  src="/storage/{{ $item->imagen }}" alt="">

                <div class="flex justify-center items-center">
                 <h2 class="text-3xl uppercase font-bold text-black text-center absolute top-28">{{$item->titulo}}</h2>
                </div>
                <div>
                    
                    <a href="{{ route('blog.edit',['blog' => $item->id]) }}" class="bg-yellow-300 hover:bg-yellow-200 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                         <span>Editar</span>
                    </a>
                    <form action="{{ route('blog.delete',['blog' => $item->id]) }}" method="POST" class="bg-red-400 hover:bg-red-300 text-xs text-bg-white uppercase font-bold rounded-full p-2 absolute top-0 ml-20 mt-2">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </div>
            </div>

        </div>   

      @endforeach

    </div>
   
</div>

@endsection