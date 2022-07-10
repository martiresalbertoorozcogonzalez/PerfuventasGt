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
            $table->string('imagen_perfume');
            $table->string('tamaño');
            $table->string('precio');
            $table->text('descripcion');

            $table->foreignId('user_id')->constrained()->references('id')->on('users')->comment('El usuario que crea el perfume');
            $table->foreignId('categoria_id')->references('id')->on('categorias')->comment('La categoria del perfume');
        
            $table->foreignId('genero_id')->constrained()->onDelete('cascade');
            $table->foreignId('precentacion_id')->constrained()->onDelete('cascade');

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
        Schema::dropIfExists('generos');
        Schema::dropIfExists('precentacions');
        Schema::dropIfExists('categorias');
    }
}
