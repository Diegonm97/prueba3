<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nuip')->unique();
            $table->string('nombreEmp');
            $table->string('estadoEmp');
            $table->string('tipoIdEmp');
            $table->string('direccionEmp');
            $table->string('oficinaEmp');
            $table->string('ciudadEmp');
            $table->string('telefonoEmp');
            $table->string('emailEmp');
            $table->date('fechaNacEmp');
            $table->double('salarioEmp');
            $table->integer('rangoEmp');
            $table->double('EPSEmp');
            $table->double('ARLEmp')->nullable();
            $table->double('AFPEmp')->nullable();
            $table->double('cajaCompEmp')->nullable();
            $table->double('beneficioEmp')->nullable();
            $table->date('fechaIngEmp');
            $table->string('tipoEmp');
            $table->string('idEmpresaContraEmp');
            $table->string('idNIT');
            $table->string('nombreEmpEmp');
            $table->double('UPCadicEmp')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
