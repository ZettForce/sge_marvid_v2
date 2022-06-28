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
        Schema::create('calificas', function (Blueprint $table) {
            $table->id();
            $table->double('cp1');
            $table->double('cp2');
            $table->double('cf');
            $table->double('ce');

            $table->unsignedBigInteger('asignatura_id');
            $table->unsignedBigInteger('alumno_id');

            $table->foreign('asignatura_id')->references('id')->on('asignaturas');
            $table->foreign('alumno_id')->references('id')->on('alumnos');

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
        Schema::dropIfExists('calificas');
    }
};
