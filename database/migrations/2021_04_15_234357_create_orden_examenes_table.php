<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenExamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_examenes', function (Blueprint $table) {
            $table->bigIncrements('id_orden_examen');
            $table->string('otro_examen');
            $table->unsignedBigInteger('exa_clinicas_id');
            $table->unsignedBigInteger('exa_laboratorios_id');
            $table->unsignedBigInteger('medico_id');
            $table->unsignedBigInteger('cita_id');

            $table->foreign('exa_clinicas_id')->references('id_examenes_clinicas')->on('examenes_clinicas')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('exa_laboratorios_id')->references('id_examenes_laboratorios')->on('examenes_laboratorios')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('medico_id')->references('id_medico')->on('medicos')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('cita_id')->references('id_cita')->on('citas')
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
        Schema::dropIfExists('orden_examenes');
    }
}
