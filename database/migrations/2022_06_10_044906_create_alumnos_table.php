<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula')->nullable();
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno')->nullable();
            $table->string('domicilio');
            $table->string('colonia');
            $table->string('zip')->nullable();
            $table->string('t_celular');
            $table->string('t-casa')->nullable();
            $table->string('nacionalidad');
            $table->string('colonia');
            $table->string('proce_secundaria')->nullable();
            $table->string('proce_estado')->nullable();
            $table->string('proce_promedio')->nullable();
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
        Schema::dropIfExists('alumnos');
    }
};
