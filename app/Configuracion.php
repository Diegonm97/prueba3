<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuracion';

     protected $fillable=['tarifaEPS','tarifaARLr1','tarifaARLr2','tarifaARLr3','tarifaARLr4','tarifaARLr5','tarifaAFP','cajaComp','CCFautoliquidacion','tarifaSena','tarifaICBF','tarifaEPS1607','tarifaCAJA1607','tarifaEPScolExt','IVA','salarioMinimo','Administracion','AdminIndepen','Inscripcion','Activacion','DiasHabiles','IndepVencimiento','Intereses'];


 //    function  getConfig($option){
 //    	$valor = DB::table('configuracion')
 //    			->select('value')
 //               ->where('option', '=', $option)
 //               ->get();
 //
 //        return $valor;
 //    }

}


 // Ejemplo de llamado al método getConfig desde el controller 
//$config['eps'] = Configuracion::getConfig('EPS');

// Otro ejemplo
 //$config = Configuracion::pluck('value', 'option');

 //$config['EPS']

 // configuracion  (id, option, value),  (1, 'EPS', 0.1) 