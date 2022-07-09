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

            $table->foreignId('categoria_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->bigInteger('genero_id')->unsigned();
            $table->bigInteger('precentacion_id')->unsigned();

            $table->foreign('genero_id')->references('id')->on('generos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('precentacion_id')->references('id')->on('precentacions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
