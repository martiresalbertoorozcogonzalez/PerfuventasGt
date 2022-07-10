<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Perfume;
use App\Models\Categoria;
use App\Models\Precentacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfumes = auth()->user()->perfumes;

        return view('Admin.Perfume.index')->with('perfumes', $perfumes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all(['id','nombre']);
        $generos = Genero::all(['id','nombre']);
        $precentacions = Precentacion::all(['id','nombre']);

        return view('Admin.Perfume.create')->with('categorias', $categorias)
                                           ->with('generos', $generos)
                                           ->with('precentacions', $precentacions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required',
            'nombre_marca' => 'required',
            'imagen_perfume' => 'required|image',
            'tamaño' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'categoria' => 'required',
            'genero' => 'required',
            'precentacion' => 'required',
         ]);

         //Guardar la imagen
         $ruta_imagen = $request['imagen_perfume']->store('perfume','public');

         // Rezise a la imagen
         $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(350,350);
         $img->save();
 
         
         //Guardar en la BD
         DB::table('perfumes')->insert([
            'titulo' => $data['titulo'],
            'nombre_marca' => $data['nombre_marca'],
            'imagen_perfume' => $ruta_imagen,
            'precio' => $data['precio'],
            'tamaño' => $data['tamaño'],
            'descripcion' => $data['descripcion'],
            'user_id' => Auth::user()->id,
            'categoria_id' => $data['categoria'],
            'genero_id' => $data['genero'],
            'precentacion_id' => $data['precentacion'],
            ]);

        return redirect()->route('perfume.index')->with('estado','La informacion se envio correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function show(Perfume $perfume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfume $perfume)
    {
        $categorias = Categoria::all(['id','nombre']);
        $generos = Genero::all(['id','nombre']);
        $precentacions = Precentacion::all(['id','nombre']);

        return view('Admin.perfume.edit', compact('perfume','categorias','generos','precentacions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfume $perfume)
    {
        //validacion
        $data = request()->validate([
            'titulo' => 'required',
            'nombre_marca' => 'required',
            'tamaño' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'categoria' => 'required',
            'genero' => 'required',
            'precentacion' => 'required',
        ]);
        
        // Guardando los datos del formulario en la base de datos
        $perfume->titulo = $data['titulo'];
        $perfume->nombre_marca = $data['nombre_marca'];
        $perfume->precio = $data['precio'];
        $perfume->tamaño = $data['tamaño'];
        $perfume->descripcion = $data['descripcion'];
        $perfume->categoria_id = $data['categoria'];
        $perfume->genero_id = $data['genero'];
        $perfume->precentacion_id = $data['precentacion'];
        
        // Si el usuario sube un anueva imagen de portafolio
           if (request('imagen_perfume')) {

            //Obtener la ruta de la imagen
            $ruta_imagen = $request['imagen_perfume']->store('upload-perfumes','public');
    
            //Resize de la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(300,300);
    
            $img->save();
    
            //Asiganr al objeto
            $perfume->imagen_perfume = $ruta_imagen;
        }

        $perfume->save();

        //redireccionar
        return redirect()->route('perfume.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfume $perfume)
    {
        // $this->authorize('delete', $perfume);

        $perfume->delete();

        return redirect()->route('perfume.index');
    }
}
