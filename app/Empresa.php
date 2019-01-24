<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

     protected $fillable=['nuip','nombreEmp','estadoEmp','tipoIdEmp','direccionEmp','oficinaEmp','ciudadEmp','telefonoEmp','emailEmp','fechaNacEmp','salarioEmp','rangoEmp','EPSEmp','ARLEmp','AFPEmp','cajaCompEmp','beneficioEmp','fechaIngEmp','tipoEmp','idEmpresaContraEmp','idNIT','nombreEmpEmp','UPCadicEmp','estadoPago'];


     public function scopeSearch1($query, $idNIT) // Realiza la busqueda en base de datos de acuerdo al idNIT
	{

   	return $query->where('idNIT','LIKE',"%$idNIT%");


    }
}
