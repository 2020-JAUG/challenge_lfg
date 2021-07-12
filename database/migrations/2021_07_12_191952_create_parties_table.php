<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->foreignId('game_id')->references('id')->on('games')->onDelete('cascade');
             //PARA SABER QUÉ USUARIO CREO LA PARTY
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
        Schema::dropIfExists('parties');
    }
}
