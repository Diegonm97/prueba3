<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nuip')->unique();
            $table->string('nombreCli');
            $table->string('estadoCli');
            $table->string('tipoIdCli');
            $table->string('direccionCli');
            $table->string('oficinaCli');
            $table->string('ciudadCli');
            $table->string('telefonoCli');
            $table->string('emailCli');
            $table->date('fechaNacCli');
            $table->double('salarioCli');
            $table->integer('rangoCli');
            $table->double('EPScli');
            $table->double('ARLcli')->nullable();
            $table->double('AFPcli')->nullable();
            $table->double('cajaCompCli')->nullable();
            $table->double('beneficioCli')->nullable();
            $table->date('fechaIngCli');
            $table->string('tipoCli');
            $table->string('idEmpresaContraCli');
            $table->string('idNIT');
            $table->string('nombreEmpCli');
            $table->double('UPCadicCli')->nullable();
            $table->string('estadoPago');
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
        Schema::dropIfExists('clientes');
    }
}
