<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('Admin.Blog.index')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Blog.create');
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
            'imagen' => 'required|image',
            'descripcion' => 'required',
         ]);

         //Guardar la imagen
         $ruta_imagen = $request['imagen']->store('blog','public');

         // Rezise a la imagen
         $img = Image::make(public_path("storage/{$ruta_imagen}") )->fit(500,500);
         $img->save();
 
         
         //Guardar en la BD
         DB::table('blogs')->insert([
            'titulo' => $data['titulo'],
            'imagen' => $ruta_imagen,
            'descripcion' => $data['descripcion'],
            ]);

        return redirect()->route('blog.index')->with('estado','La informacion se envio correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('Admin.Blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
          //validacion
          $data = request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);
        
        // Guardando los datos del formulario en la base de datos
        $blog->titulo = $data['titulo'];
        $blog->descripcion = $data['descripcion'];
        
        // Si el usuario sube un anueva imagen de quien somos
           if (request('imagen')) {

            //Obtener la ruta de la imagen
            $ruta_imagen = $request['imagen']->store('upload-blog','public');
    
            //Resize de la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(500,500);
    
            $img->save();
    
            //Asiganr al objeto
            $blog->imagen = $ruta_imagen;
        }

        $blog->save();

        //redireccionar
        return redirect()->route('blog.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index');
    }
}
