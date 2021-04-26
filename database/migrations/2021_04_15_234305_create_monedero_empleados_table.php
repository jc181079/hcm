<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonederoEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monedero_empleados', function (Blueprint $table) {
            $table->bigIncrements('id_monedero');
            $table->date('fecha_monedero');
            $table->decimal('monto_monedero',10,2);
            $table->decimal('monto_causado',10,2);
            $table->string('descripcion_monedero',10,2);
            $table->integer('ci_beneficiario');
            $table->unsignedBigInteger('cita_id');
            

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
        Schema::dropIfExists('monedero_empleados');
    }
}
