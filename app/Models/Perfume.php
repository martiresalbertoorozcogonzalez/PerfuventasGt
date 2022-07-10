<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'nombre_marca',
        'precio',
        'descripcion',
        'tamaño',
        'imagen_perfume',
        'categoria_id',
        'precentacion_id',
        'genero_id',
      ];


      public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }

    public function precentacion()
    {
        return $this->belongsTo(Precentacion::class);
    }

}
