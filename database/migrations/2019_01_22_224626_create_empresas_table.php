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
            $table->string('tipoIdEmp');
            $table->string('nombreRep');
            $table->string('direccionEmp');
            $table->string('oficinaEmp');
            $table->string('ciudadEmp');
            $table->string('telefonoEmp');
            $table->string('emailEmp');
            $table->double('EPScli');
            $table->string('nombreEPSEmp');
            $table->double('ARLEmp');
            $table->string('nombreARLEmp');
            $table->double('AFPEmp');
            $table->string('nombreAFPEmp');
            $table->double('cajaCompEmp');
            $table->string('nombreCajaCompEmp');
            $table->double('administracionEmp');
            $table->double('inscripcionEmp');
            $table->date('fechaIngEmp');
            $table->string('tipoEmp');
            $table->string('idEmpresaContraEmp')->unique();
            $table->string('idNIT');
            $table->string('nombreEmp');
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
