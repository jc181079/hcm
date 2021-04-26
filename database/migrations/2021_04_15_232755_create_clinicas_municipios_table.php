<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicasMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicas_municipios', function (Blueprint $table) {
            $table->bigIncrements('id_clinica_municipio');
            $table->unsignedBigInteger('clinica_id');
            $table->unsignedBigInteger('municipio_id');
            
            
            //relacion de la tabla
            $table->foreign('clinica_id')->references('id_clinicas')->on('clinicas')
            ->constrained()
            ->onDelete('cascade');
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
        Schema::dropIfExists('clinicas_municipios');
    }
}
