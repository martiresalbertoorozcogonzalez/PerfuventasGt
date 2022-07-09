<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->timestamps();
        });

        
        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->timestamps();
        });
        

        Schema::create('precentacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->timestamps();
        });
        

        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('nombre_marca');
            $table->foreignId('categoria_id')->constrained()->comment('La categoria del perfume');
            $table->foreignId('genero_id')->constrained()->comment('El geneo del perfume');
            $table->foreignId('precentacion')->constrained()->comment('la precentacion del perfume');
            $table->string('imagen_perfume');
            $table->string('tamaño');
            $table->string('precio');
            $table->text('descripcion');
            $table->uuid('uuid');

            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que crea la pagina');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfumes');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('generos');
        Schema::dropIfExists('precentacions');
    }
}
