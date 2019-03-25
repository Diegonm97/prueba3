<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuracion';

    protected $fillable = ['nombre', 'codigo', 'valor'];


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



