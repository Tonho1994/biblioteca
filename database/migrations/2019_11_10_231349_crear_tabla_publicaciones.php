<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPublicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Publicaciones', function (Blueprint $table) {
            $table->collation = 'utf8_unicode_ci';
            $table->charset = 'utf8';


            $table->bigIncrements('id');
            $table->string('nombre_publucacion')->unique();

        //llaves foraneas inicio
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('categoria_id');
           $table->unsignedBigInteger('idioma_id');
        //llaves foraneas fin

            $table->year('año_publicacion');
            $table->binary('archivo_pdf');
            $table->timestamps();

        //condiciones de las llaves foraneas
            $table->foreign('autor_id')
                  ->references('id')->on('Autores')
                  ->onDelete('cascade');

            $table->foreign('categoria_id')
                  ->references('id')->on('Categorias')
                  ->onDelete('cascade');

            $table->foreign('idioma_id')
                  ->references('id')->on('Idiomas')
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
        Schema::dropIfExists('Publicaciones');
    }
}
