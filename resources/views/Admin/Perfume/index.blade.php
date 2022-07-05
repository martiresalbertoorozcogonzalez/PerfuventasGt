@extends('layouts.app')

@section('estilos')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')

<div class="container mx-auto px-4">

    {{-- Botones de Crear y regresar --}}
    <div class="flex flex-row justify-between">
        <div class="flex flex-row my-4">
            <a href="" class="bg-pink-400 hover:bg-pink-300 sm:text-sm md:text-lg text-center font-bold p-3 rounded-lg">Regresar</a>
        </div>
    
        <div class="flex flex-row-reverse my-4">
            <a href="{{ route('perfume.create') }}" class="bg-pink-400 hover:bg-pink-300 sm:text-sm md:text-lg text-center font-bold p-3 rounded-lg">Crear Perfume</a>
        </div>
       
    </div>

    {{-- Seccion de portafolio --}}
    <div class="flex flex-wrap -m-4">
        
      {{-- Ac va el Foreach --}}

            
        <div class="p-4 lg:w-1/3">

            <div class="rounded shadow-md relative">
                
                <img  src="" alt="">

                <div class="flex justify-center items-center">
                 <h2 class="text-3xl uppercase font-bold text-black text-center absolute top-28"></h2>
                </div>
                <div>
                    
                    <a href="" class="bg-pink-300 hover:bg-pink-200 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                         <span>Editar</span>
                    </a>
                    <form action="" method="POST" class="bg-red-400 hover:bg-red-300 text-xs text-bg-white uppercase font-bold rounded-full p-2 absolute top-0 ml-20 mt-2">
                        @csrf
                        @method('DELETE')
                        <input class="bg-red-400 text-gray-800 font-bold" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>

        </div>   



    </div>
   
</div>

        
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
@endsection
