
<header class="bg-red-200 text-gray-600">

    <div class="container flex flex-col md:flex-row justify-between mx-auto p-5 items-center">
      <a href="{{ route('front')}}" class="flex flex-col md:flex-row title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src="{{ asset('/img/Perfuventas.png') }}" alt="" width="60">
        <span class="ml-3 text-xl text-white font-bold">PerfuventasGuatemala</span>
      </a>
      <nav class="flex flex-col md:flex-col lg:flex-row lg:ml-7 items-center text-base text-white justify-center gap-1">
        <a href="{{ url('/') }}" class="mr-5 hover:text-indigo-600">Inicio</a>
        <a class="mr-5 hover:text-indigo-600">Fragancias</a>
        <a class="mr-5 hover:text-indigo-600">Quienes somos</a>
        <a class="mr-5 hover:text-indigo-600">Contactanos</a>
      </nav>
      <button class="inline-flex items-center hover:bg-purple-300	bg-purple-500 border-0 py-1 px-3 focus:outline-none rounded text-base text-white mt-4 md:mt-0">PDF Listado de precios
      </button>
    </div>

</header>



