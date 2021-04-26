<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicasMedicosHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicas_medicos_horarios', function (Blueprint $table) {
            $table->bigIncrements('id_clinica_medicos_horarios');
            $table->unsignedBigInteger('medico_especialidades_id');
            $table->unsignedBigInteger('clinica_id');
            $table->string('dias_atencion');
            $table->string('horas_atencion');
            
            //relacion de la tabla
            $table->foreign('medico_especialidades_id')->references('id_medico_especialidades')->on('medicos_especialidad_honorarios')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('clinica_id')->references('id_clinicas')->on('clinicas')
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
        Schema::dropIfExists('clinicas_medicos_horarios');
    }
}
