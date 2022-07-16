<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Perfume;
use App\Models\Categoria;
use App\Models\Quiensomos;
use Illuminate\Http\Request;

class FrontController extends Controller
{



    // Procedimeinto para mostrar los perfumes en sus diferentes categorias
    public function index()
    {
        $blogs = Blog::all();
        $perfumes = Perfume::all();
        $perfumesdemujer = Perfume::where("genero_id","=",1)->get();
        $perfumesdehombre = Perfume::where("genero_id","=",2)->get();
        $estuches = Perfume::where("precentacion_id","=",2)->get();

        
        return view('Front.welcome')->with('perfumes', $perfumes)
                                    ->with('perfumesdemujer', $perfumesdemujer)
                                    ->with('perfumesdehombre', $perfumesdehombre)
                                    ->with('estuches', $estuches)
                                    ->with('blogs', $blogs);
    }


    // Procedimiento para mostrar todos los perfumes
    public function fragancias()
    {

        $fragancias = Perfume::all();
        return view('Front.fragancias')->with('fragancias', $fragancias); 
    }


    // Procedimiento para mostrar todos los perfumes
    public function quiensomos()
    {
        $quiensomos = Quiensomos::all();
        $perfumes = Perfume::all();
        return view('Front.quiensomos')->with('perfumes', $perfumes)
                                       ->with('quiensomos',$quiensomos); 
    }


    // Procedimiento para mostrar todos los perfumes
    public function contacto()
    {
        return view('Front.contacto'); 
    }


}
