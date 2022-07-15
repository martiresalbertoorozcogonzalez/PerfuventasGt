@extends('layouts.app')

@section('estilos')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('content')


<div class="container flex flex-col mx-auto my-auto p-10">

<div class="mb-6">
    
<a href="{{ route('quiensomos.index') }}" class="bg-pink-400 hover:bg-pink-300 sm:text-sm md:text-lg text-center font-bold p-3 rounded-lg">Regresar</a>
            
</div>

<div class="bg-red-200 py-3 px-10 mb-5">
    
<form class="flex flex-col max-w-lg mx-auto p-0 m-0 my-10" action="{{route('quiensomos.store')}}" method="POST" enctype="multipart/form-data" novalidate>
        
@csrf
        
<h1 class="text-5xl text-center font-bold px-10 py-10">Crear Quien somos</h1>
        
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
        
    <label for="descripcion" class="block text-black font-bold text-lg mb-2">Descripcion para quien somos</label>

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
        
    <label  for="imagen" class="block text-gray-700 text-lg mb-2">Elige una imagen para quien somos</label>
    
    <input type="file" name="imagen" id="imagen" class="form-control @error('imagen') is-invalid @enderror ">

    @error('imagen')
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