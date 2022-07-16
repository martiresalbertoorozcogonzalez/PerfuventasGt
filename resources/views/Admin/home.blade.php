@extends('layouts.app')

@section('content')

<div class="container mx-auto px-5 py-10">
       
    <div class="flex flex-col md:flex-row gap-3">
        <a href="{{ route('perfume.index') }}" class="bg-red-400 hover:bg-red-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Perfumeria</h2>
        </a>
       
        <a href="{{ route('quiensomos.index') }}" class="bg-green-400 hover:bg-green-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Quien somos</h2>
        </a>

        <a href="{{ route('blog.index') }}" class="bg-indigo-400 hover:bg-indigo-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Blog</h2>
        </a>

    </div>

    

</div>


    

@endsection
