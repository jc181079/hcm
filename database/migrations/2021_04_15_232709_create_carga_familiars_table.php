<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargaFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carga_familiars', function (Blueprint $table) {
            $table->bigIncrements('id_carga_familiar');
            $table->string('nom_pariente');
            $table->string('ape_pariente');
            $table->integer('ci_pariente');
            $table->integer('edad_pariente');
            $table->string('sexo_pariente');
            $table->string('ec_pariente'); //estado civil
            $table->string('parentesco');
            $table->unsignedBigInteger('empleado_id');
            $table->timestamps();

            $table->foreign('empleado_id')->references('id_empleado')->on('empleados')
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
        Schema::dropIfExists('carga_familiars');
    }
}
