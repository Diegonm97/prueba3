<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->increments('id');
             $table->double('tarifaEPS');
             $table->double('tarifaARLr1');
             $table->double('tarifaARLr2');
             $table->double('tarifaARLr3');
             $table->double('tarifaARLr4');
             $table->double('tarifaARLr5');
             $table->double('tarifaAFP');
             $table->double('cajaComp');
             $table->double('CCFautoliquidacion');
             $table->double('tarifaSena');
             $table->double('tarifaICBF');
             $table->double('tarifaEPS1607');
             $table->double('tarifaCAJA1607');
             $table->double('tarifaEPScolExt');
             $table->double('IVA');
             $table->double('salarioMinimo');
             $table->double('Administracion');
             $table->double('AdminIndepen');
             $table->double('Inscripcion');
             $table->double('Activacion');
             $table->double('DiasHabiles');
             $table->double('IndepVencimiento');
             $table->double('Intereses');


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
        Schema::dropIfExists('configuracion');
    }
}
