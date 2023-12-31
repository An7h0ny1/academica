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
        Schema::create('regnotas', function (Blueprint $table) {
            $table->char('estudiante', 4);
            $table->char('materia', 2);
            $table->char('profesor', 2);
            $table->float('parcial1');
            $table->float('parcial2');
            $table->float('eFinal');
            $table->float('nFinal');
            $table->char('estado', 1);

            $table->foreign('estudiante')
            ->references('codEstudiante')->on('estudiantes');
            $table->foreign('materia')
            ->references('codMateria')->on('materias');
            $table->foreign('profesor')
            ->references('codProfesor')->on('profesores');
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
        Schema::dropIfExists('regnotas');
    }
};
