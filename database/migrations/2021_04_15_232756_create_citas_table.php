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
            $table->unsignedBigInteger('clinica_municipio_id');
            $table->unsignedBigInteger('especialidad_medico_id');
            $table->unsignedBigInteger('medico_id');
            $table->integer('ci_beneficiario'); 
            $table->text('dolencia_descripcion');            
            $table->string('estatus_cita');
            $table->decimal('pre_compromiso',10,2)->default(0.00);
            $table->timestamps();

            //relacion de la tabla
            
            $table->foreign('clinica_municipio_id')->references('id_clinica_municipio')->on('clinicas_municipios')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('medico_id')->references('id_medico')->on('medicos')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('especialidad_medico_id')->references('id_especialidad')->on('especialidad_medicos')
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
