<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

     protected $fillable=['nuip','nombreCli','estadoEmp','tipoIdEmp','direccionEmp','oficinaEmp','ciudadEmp','telefonoEmp','emailEmp','fechaIngEmp','tipoEmp','idEmpresaContraEmp','idNIT','nombreEmp','estadoPago'];


     public function scopeSearch1($query, $idEmpresaContraEmp) // Realiza la busqueda en base de datos de acuerdo al idNIT
	{

   	return $query->where('idEmpresaContraEmp','LIKE',"%$idEmpresaContraEmp%");


    }

     public function getClientes() // Realiza la busqueda en base de datos de acuerdo al idNIT
	{


   	return Clientes::where('idEmpresaContraCli','=', $this->idEmpresaContraEmp)->get();


    }


    
}
