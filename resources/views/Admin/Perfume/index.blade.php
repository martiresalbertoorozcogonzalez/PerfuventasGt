@extends('layouts.app')

@section('estilos')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')

<div class="container mx-auto px-4">

{{-- Botones de Crear y regresar --}}
<div class="flex flex-col justify-center items-center md:flex-row md:justify-between">
    <div class="my-4">
        <a href="{{ route('home') }}" class="bg-pink-400 hover:bg-pink-300 sm:text-sm md:text-lg text-center font-bold p-3 rounded-lg">Regresar</a>
    </div>

    <div class="-mt-1">
        <h1 class="text-5xl font-bold text-center">PerfuVentasGuatemala</h1>
    </div>

    <div class="my-4">
        <a href="{{ route('perfume.create') }}" class="bg-pink-400 hover:bg-pink-300 sm:text-sm md:text-lg font-bold p-3 rounded-lg">Crear perfume</a>
    </div>
    
</div>

{{-- Tabla de productos que vienen de la base de datos --}}
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-x-auto">
            <table class="min-w-full">
            
            <thead class="border-b bg-red-200">
                <tr>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                ID
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Titulo
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Marca
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Precio
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Tamaño
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Categoria
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Genero
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Precentacion
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Imagen
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Editar
                </th>
                <th scope="col" class="text-sm font-medium text-indigo-600 px-6 py-4 text-left">
                Eliminar
                </th>
                </tr>
            </thead>

            <tbody>
                
            @foreach ($perfumes as $perfume)
            
            <tr class="border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  {{ $perfume->id }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ $perfume->titulo }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ $perfume->nombre_marca }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $perfume->precio }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $perfume->tamaño }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $perfume->categoria->nombre }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $perfume->genero->nombre }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $perfume->precentacion->nombre }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                   <img src="/storage/{{ $perfume->imagen_perfume }}" alt="">
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <a href="{{ route('perfume.edit',['perfume' => $perfume->id]) }}" class="w-full hover:bg-pink-300	bg-pink-400 font-bold p-2 focus:outline focus:shadow-outline uppercase rounded">Editar</a>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <a href="{{ route('perfume.delete',['perfume' => $perfume->id]) }}" class="w-full hover:bg-pink-300	bg-pink-400 font-bold p-2 focus:outline focus:shadow-outline uppercase rounded">Eliminar</a>
                </td>
            </tr>
            
            @endforeach

            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
            
        
</div>

        
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
@endsection
