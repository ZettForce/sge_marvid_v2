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
            /* Datos control escolar */
            $table->string('matricula')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('costosInscripcion')->nullable();
            $table->string('costosColegiatura')->nullable();
            $table->string('ciclo')->nullable();
            /*  Datos del alumno */
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable();
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno')->nullable();
            $table->string('f_nacimiento');
            $table->string('sexo');
            $table->string('curp');
            $table->string('domicilio');
            $table->string('colonia');
            $table->string('zip')->nullable();
            $table->string('t_celular',10);
            $table->string('t-casa',10)->nullable();
            $table->string('nacionalidad');
            /* Secundaria de procedencia */
            $table->string('proce_secundaria')->nullable();
            $table->string('proce_estado')->nullable();
            $table->string('proce_promedio')->nullable();
            /* Información medica */
            $table->string('enfermedades')->nullable();
            $table->string('grupoSanguineo')->nullable();
            $table->string('atencionMedica')->nullable();
            /* Datos del tutor */
            $table->string('nombrePadre');
            $table->string('nombreMadre');
            $table->string('nombreTutor')->nullable();
            $table->string('direccion');
            $table->string('tutor_tel_trabajo',10)->nullable();
            $table->string('tutor_tel_celular',10);

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
