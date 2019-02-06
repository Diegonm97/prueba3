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
             $table->double('CCFautoliquidacion')->nullable();
             $table->double('tarifaSena');
             $table->double('tarifaICBF');
             $table->double('tarifaEPS1607');
             $table->double('tarifaCAJA1607');
             $table->double('tarifaEPScolExt')->nullable();
             $table->double('IVA');
             $table->double('salarioMinimo');
             $table->double('Administracion')->nullable();
             $table->double('AdminIndepen')->nullable();
             $table->double('Inscripcion')->nullable();
             $table->double('Activacion')->nullable();
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
