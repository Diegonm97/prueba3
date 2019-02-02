<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nuipPago');
            $table->string('nombrePago');
            $table->string('oficinaPago');
            $table->string('telefonoPago');
            $table->string('emailPago')->nullable();
            $table->double('salarioPago');
            $table->double('EPSpago');
            $table->double('AFPpago');
            $table->double('ARLpago');
            $table->double('cajaCompPago')->nullable();
            $table->string('mesPago');
            $table->string('estadoClientePago');
            $table->double('sumaPago');
            $table->double('interesesPago');
            $table->double('sumTotalPago');
            $table->double('abonoPago')->nullable();
            $table->string('formaPago');
            $table->date('proximoPago');
            $table->string('observacionPago')->nullable();
            $table->string('informePago')->nullable();
            $table->string('empresaContPago');
            $table->double('costoAdminPago');
            $table->double('EMIpago')->nullable();
            $table->double('descuentoPago')->nullable();
            $table->double('UPCadicPago')->nullable();
            $table->double('sevFunePago')->nullable();
            $table->double('inscripcionPago')->nullable();
            $table->double('activacionPago');
            $table->double('aporteVoluPago')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
