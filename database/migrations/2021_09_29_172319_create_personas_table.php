<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->foreignId('user_id')->constrained();//agregar llave foranea
            //esta debe de ser el nombre singular del tabla_columna
=======
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('user_id')->constrained();
>>>>>>> 39fd82dca7c4ba2fbd9a3c134e2f1010dd8530f7
            $table->string('nombre');
            $table->string('apellido_paterno');
            //validar campo desde base de datos, *no es buena practica poner nullos
            $table->string('apellido_materno')->nullable();
            $table->string('identificador');
            $table->string('telefono',15);
            $table->string('correo')->default('');
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
        Schema::dropIfExists('personas');
    }
}
