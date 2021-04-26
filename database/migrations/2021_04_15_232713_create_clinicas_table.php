<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicas', function (Blueprint $table) {
            $table->bigIncrements('id_clinicas');
            $table->string('rif_clinica');
            $table->string('nom_clinica');
            $table->text('dir_clinica');
            $table->string('tlf_clinica');
            $table->string('correo_clinica');
            $table->unsignedBigInteger('municipio_id'); 
            $table->string('estatus_cita');
            $table->timestamps();

            //relacion de la tabla
            $table->foreign('municipio_id')->references('id_municipio')->on('municipios')
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
        Schema::dropIfExists('clinicas');
    }
}
