<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id_cita');
            $table->date('fecha_cita');
            $table->unsignedBigInteger('clinica_medicos_horarios_id');
            $table->unsignedBigInteger('clinica_municipio_id');
            $table->unsignedBigInteger('medico_id');
            $table->unsignedBigInteger('medico_especialidad_honorarios_id');
            $table->integer('ci_beneficiario'); 
            $table->string('estatus_cita');
            $table->timestamps();

            //relacion de la tabla
            $table->foreign('clinica_medicos_horarios_id')->references('id_clinica_medicos_horarios')->on('clinicas_medicos_horarios')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('clinica_municipio_id')->references('id_clinica_municipio')->on('clinicas_municipios')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('medico_id')->references('id_medico')->on('medicos')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('medico_especialidad_honorarios_id')->references('id_medico_especialidades')->on('medicos_especialidad_honorarios')
            ->constrained()
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
        Schema::dropIfExists('citas');
    }
}
