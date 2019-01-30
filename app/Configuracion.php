<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuracion';

     protected $fillable=['tarifaEPS','tarifaARLr1','tarifaARLr2','tarifaARLr3','tarifaARLr4','tarifaARLr5','tarifaAFP','cajaComp','CCFautoliquidacion','tarifaSena','tarifaICBF','tarifaEPS1607','tarifaCAJA1607','tarifaEPScolExt','IVA','salarioMinimo','Administracion','DiasHabiles','IndepVencimiento'];
}
