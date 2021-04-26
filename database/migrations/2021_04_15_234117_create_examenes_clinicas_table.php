<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenesClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes_clinicas', function (Blueprint $table) {
            $table->bigIncrements('id_examenes_clinicas');
            $table->string('nom_examenes');
            $table->decimal('precio_examen_clinica',10,2);
            $table->unsignedBigInteger('clinicas_id');

            $table->foreign('clinicas_id')->references('id_clinicas')->on('clinicas')
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
        Schema::dropIfExists('examenes_clinicas');
    }
}
