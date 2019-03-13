<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

     protected $fillable=['nuip','nombreCli','apellidoCli','estadoCli','tipoIdCli','direccionCli','oficinaCli','ciudadCli','telefonoCli','emailCli','fechaNacCli','salarioCli','rangoCli','EPScli','ARLcli','AFPcli','cajaCompCli','beneficioCli','fechaIngCli','tipoCli','idEmpresaContraCli','idNIT','nombreEmpcli','UPCadicCli','estadoPago'];

// Realiza la busqueda en base de datos de acuerdo al nuip
	public function scopeSearch1($query, $nuip) 
	{
   	return $query->where('nuip','LIKE',"%$nuip%");
    }

}
