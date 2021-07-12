<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 20);
            $table->string('thumbnail_url', 200)->unique();
            //PARA SABER QUÉ USUARIO CREO EL JUEGO
            $table->bigInteger('user_id')->unsigned();

            //llave foranea CREANDO UNA RELACIÓN. NOMBRE DE LA TABLA EN SINGULAR Y _ID
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('games');
    }
}
