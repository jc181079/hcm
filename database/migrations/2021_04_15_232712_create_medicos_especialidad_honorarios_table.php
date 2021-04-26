<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosEspecialidadHonorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos_especialidad_honorarios', function (Blueprint $table) {
            $table->bigIncrements('id_medico_especialidades');
            $table->unsignedBigInteger('medico_id');
            $table->unsignedBigInteger('especialidad_id');
            $table->decimal('monto_honorarios',10,2);

            $table->foreign('medico_id')->references('id_medico')->on('medicos')
            ->constrained()
            ->onDelete('cascade');
            $table->foreign('especialidad_id')->references('id_especialidad')->on('especialidad_medicos')
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
        Schema::dropIfExists('medicos_especialidad_honorarios');
    }
}
