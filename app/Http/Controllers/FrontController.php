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


        return view('Front.welcome')->with('perfumes', $perfumes);
    }
}
