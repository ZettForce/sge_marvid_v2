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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable();
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('f_nacimiento');
            $table->string('sexo');
            $table->string('curp');
            $table->string('domicilio');
            $table->string('colonia');
            $table->string('zip')->nullable();
            $table->string('t_celular',10);
            $table->string('t-casa',10)->nullable();
            $table->string('nacionalidad');
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
        Schema::dropIfExists('usuarios');
    }
};
