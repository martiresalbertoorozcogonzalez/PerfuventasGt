@extends('layouts.app')

@section('content')

<div class="container mx-auto px-5 py-10">
       
    <div class="flex flex-col md:flex-row gap-3">
        <a href="{{ route('perfume.index') }}" class="bg-yellow-400 hover:bg-yellow-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Perfumeria</h2>
            <img src="/img/fondo2.jpg" alt="">
        </a>
        <a href="" class="bg-red-400 hover:bg-red-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Categorias</h2>
            <img src="/img/fondo2.jpg" alt="">
        </a>
        <a href="" class="bg-blue-400 hover:bg-blue-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Certificados</h2>
            <img src="/img/fondo2.jpg" alt="">
        </a>
        {{-- <a href="{{ route('servicios.index') }}" class="bg-green-400 hover:bg-green-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Servicios</h2>
            <img src="/img/fondo2.jpg" alt="">
        </a> --}}
    </div>

   </div>
    

@endsection
