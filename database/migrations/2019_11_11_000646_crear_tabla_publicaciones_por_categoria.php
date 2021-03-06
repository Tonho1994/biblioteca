<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPublicacionesPorCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Publicaciones_por_categoria', function (Blueprint $table) {
            $table->collation = 'utf8_unicode_ci';
            $table->charset = 'utf8';


            $table->bigIncrements('id');

        //llaves foraneas inicio
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('publicacion_id');
        //llaves foraneas fin


            $table->timestamps();

        //condiciones de las llaves foraneas
            $table->foreign('categoria_id')
                  ->references('id')->on('Categorias')
                  ->onDelete('cascade');

            $table->foreign('publicacion_id')
                  ->references('id')->on('Publicaciones')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Publicaciones_por_categoria');
    }
}
