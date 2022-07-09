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
        'tamaño',
        'descripcion',
        'categoria_id',
        'precentacion_id',
        'genero_id',
        'imagen_perfume',
      ];


      public function user()
    {
        return $this->belongsTo(User::class);
    }
}
