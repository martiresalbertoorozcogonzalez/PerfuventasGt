<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use App\Models\Categoria;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $perfumes = Perfume::all();
        $perfumesdemujer = Perfume::where("genero_id","=",1)->get();
        $perfumesdehombre = Perfume::where("genero_id","=",2)->get();
        $estuches = Perfume::where("precentacion_id","=",2)->get();

        
        return view('Front.welcome')->with('perfumes', $perfumes)
                                    ->with('perfumesdemujer', $perfumesdemujer)
                                    ->with('perfumesdehombre', $perfumesdehombre)
                                    ->with('estuches', $estuches);
    }
}
