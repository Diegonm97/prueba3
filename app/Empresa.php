<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

     protected $fillable=['nit', 'nombre', 'nombre_contacto', 'telefono_contacto',
      'email_contacto', 'id_ciudad', 'direccion', 'estado', 'beneficio', 
      'inscripcion','administracion', 'id_usuario', 'fecha_ingreso','observacion'];


     public function scopeSearch1($query, $nit) // Realiza la busqueda en base de datos de acuerdo al idNIT
	{

   	return $query->where('nit','LIKE',"%$nit%");


    }

     public function getClientes() // Realiza la busqueda en base de datos de acuerdo al idNIT
	{


   //	return Clientes::where('nit','=', $this->nit)->get();


    }


    
}
