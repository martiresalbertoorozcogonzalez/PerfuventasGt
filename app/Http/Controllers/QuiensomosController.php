<?php

namespace App\Http\Controllers;

use App\Models\Quiensomos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class QuiensomosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quiensomos = Quiensomos::all();
        return view('Admin.Quiensomos.index')->with('quiensomos',$quiensomos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Quiensomos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required',
            'imagen' => 'required|image',
            'descripcion' => 'required',
         ]);

         //Guardar la imagen
         $ruta_imagen = $request['imagen']->store('quiensomos','public');

         // Rezise a la imagen
         $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(500,500);
         $img->save();
 
         
         //Guardar en la BD
         DB::table('quiensomos')->insert([
            'titulo' => $data['titulo'],
            'imagen' => $ruta_imagen,
            'descripcion' => $data['descripcion'],
            ]);

        return redirect()->route('quiensomos.index')->with('estado','La informacion se envio correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiensomos  $quiensomos
     * @return \Illuminate\Http\Response
     */
    public function show(Quiensomos $quiensomos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiensomos  $quiensomos
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiensomos $quiensomos)
    {
        //    dd($quiensomos); 
           return view('Admin.Quiensomos.edit', compact('quiensomos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiensomos  $quiensomos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiensomos $quiensomos)
    {
          //validacion
          $data = request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);
        
        // Guardando los datos del formulario en la base de datos
        $quiensomos->titulo = $data['titulo'];
        $quiensomos->descripcion = $data['descripcion'];
        
        // Si el usuario sube un anueva imagen de quien somos
           if (request('imagen')) {

            //Obtener la ruta de la imagen
            $ruta_imagen = $request['imagen']->store('upload-quiensomos','public');
    
            //Resize de la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(500,500);
    
            $img->save();
    
            //Asiganr al objeto
            $quiensomos->imagen = $ruta_imagen;
        }

        $quiensomos->save();

        //redireccionar
        return redirect()->route('quiensomos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiensomos  $quiensomos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiensomos $quiensomos)
    {
        $quiensomos->delete();

        return redirect()->route('quiensomos.index');
    }
}
