@extends('layouts.app')

@section('estilos')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('content')


<div class="container flex flex-col mx-auto my-auto p-10">

<div class="mb-6">
    
<a href="{{ route('perfume.index') }}" class="bg-pink-400 hover:bg-pink-300 sm:text-sm md:text-lg text-center font-bold p-3 rounded-lg">Regresar</a>
            
</div>

<div class="bg-red-200 py-3 px-10 mb-5">
    
<form class="flex flex-col max-w-lg mx-auto p-0 m-0 my-10" action="{{route('perfume.store')}}" method="POST" enctype="multipart/form-data" novalidate>
        
@csrf
        
<h1 class="text-5xl text-center font-bold px-10 py-10">Crear Perfume</h1>
        
<div class="mb-5">

    <label for="titulo" class="block text-black font-bold text-lg mb-2">titulo</label>

    <input id="titulo" 
    type="text"
    class="p-3 bg-white rounded form-input w-full @error('titulo') border-blue-500 border @enderror"
    name="titulo"
    placeholder="titulo"
    value="{{old('titulo')}}"
    >
    @error('titulo')
    <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
        <strong class="font-bold">Error!!</strong>
        <span class="block">{{$message}}</span>
    </div>
    @enderror

</div>

<div class="mb-5">

    <label for="nombre_marca" class="block text-black font-bold text-lg mb-2">Marca</label>

    <input id="nombre_marca" 
    type="text"
    class="p-3 bg-white rounded form-input w-full @error('nombre_marca') border-blue-500 border @enderror"
    name="nombre_marca"
    placeholder="nombre_marca"
    value="{{old('nombre_marca')}}"
    >
    @error('nombre_marca')
    <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
        <strong class="font-bold">Error!!</strong>
        <span class="block">{{$message}}</span>
    </div>
    @enderror

</div>

<div class="mb-5">

    <label for="tama??o" class="block text-black font-bold text-lg mb-2">Tama??o</label>
    
    <input id="tama??o" 
    type="text"
    class="p-3 bg-white rounded form-input w-full @error('tama??o') border-blue-500 border @enderror"
    name="tama??o"
    placeholder="tama??o"
    value="{{old('tama??o')}}"
    >
    @error('tama??o')
    <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
        <strong class="font-bold">Error!!</strong>
        <span class="block">{{$message}}</span>
    </div>
    @enderror
    
</div>

<div class="mb-5">

    <label for="precio" class="block text-black font-bold text-lg mb-2">Precio</label>
    
    <input id="precio" 
    type="text"
    class="p-3 bg-white rounded form-input w-full @error('precio') border-blue-500 border @enderror"
    name="precio"
    placeholder="Precio"
    value="{{old('precio')}}"
    >
    @error('nombre_marca')
    <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
        <strong class="font-bold">Error!!</strong>
        <span class="block">{{$message}}</span>
    </div>
    @enderror
    
</div>

<div class="mb-5">
    <label for="categoria" class="block text-gray-700 text-lg mb-2 font-bold">
        Categoria
    </label>
    <select class="block appearance-none border border-gray-200 
              text-gray-700 rounded leading-tight focus:outline-none 
              focus:bg-white focus:border-gray-500 p-3 bg-gray-100 
              w-full" name="categoria" id="categoria">
        <option disabled selected> Selecciona una categoria</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">
                {{ old('categoria') == $categoria->id ? 'selected' : '' }}
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>
    @error('categoria_id')
            <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                <strong class="font-bold">Error!!</strong>
                <span class="block">{{$message}}</span>
            </div>
    @enderror()
</div>   

<div class="mb-5">
    <label for="genero" class="block text-gray-700 text-lg mb-2 font-bold">
        Genero
    </label>
    <select class="block appearance-none border border-gray-200 
              text-gray-700 rounded leading-tight focus:outline-none 
              focus:bg-white focus:border-gray-500 p-3 bg-gray-100 
              w-full" name="genero" id="categoria">
        <option disabled selected> Selecciona un Genero</option>
        @foreach ($generos as $genero)
        {{ old('genero') == $genero->id ? 'selected' : '' }} 
            <option value="{{ $genero->id }}">
                {{ $genero->nombre }}
            </option>
        @endforeach
    </select>
    @error('genero_id')
            <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                <strong class="font-bold">Error!!</strong>
                <span class="block">{{$message}}</span>
            </div>
    @enderror()
</div>  

<div class="mb-5">
    <label for="precentacion" class="block text-gray-700 text-lg mb-2 font-bold">
        Precentacion
    </label>
    <select class="block appearance-none border border-gray-200 
              text-gray-700 rounded leading-tight focus:outline-none 
              focus:bg-white focus:border-gray-500 p-3 bg-gray-100 
              w-full" name="precentacion" id="precentacion">
        <option disabled selected> Selecciona una Precentacion</option>
        @foreach ($precentacions as $precentacion)
        {{ old('precentacion') == $precentacion->id ? 'selected' : '' }}
            <option value="{{ $precentacion->id }}">
                {{ $precentacion->nombre }}
            </option>
        @endforeach
    </select>
    @error('precentacion_id')
            <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                <strong class="font-bold">Error!!</strong>
                <span class="block">{{$message}}</span>
            </div>
    @enderror()
</div> 

<div class="mb-5">
        
    <label for="descripcion" class="block text-black font-bold text-lg mb-2">Descripcion para el perfume</label>

    <input type="hidden" name="descripcion" id="descripcion" value="{{ old('descripcion') }}">

    <trix-editor class="bg-white" input="descripcion">
    </trix-editor>

    @error('descripcion')
    <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
        <strong class="font-bold">Error!!</strong> 
        <span class="block">{{$message}}</span>
    </div>
    @enderror()

</div>   

<div class="flex flex-col mb-5">
        
    <label  for="imagen_perfume" class="block text-gray-700 text-lg mb-2">Elige una imagen para perfume</label>
    
    <input type="file" name="imagen_perfume" id="imagen_perfume" class="form-control @error('imagen_perfume') is-invalid @enderror ">

    @error('imagen_perfume')
    <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
        <strong class="font-bold">Error!!</strong> 
        <span class="block">{{$message}}</span>
    </div>
    @enderror()
</div>

<button class="bg-teal-500 w-full hover:bg-purple-500	bg-purple-400 font-bold p-3 focus:outline focus:shadow-outline uppercase ">Publicar Perfume</button>

</form>
    
</div>

</div>

@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection