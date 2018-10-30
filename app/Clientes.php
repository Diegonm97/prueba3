<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

     protected $fillable=['nuip','nombreCli','estadoCli','tipoIdCli','direccionCli','oficinaCli','ciudadCli','telefonoCli','emailCli','fechaNacCli','salarioCli','rangoCli','EPScli','ARLcli','AFPcli','cajaCompCli','beneficioCli','fechaIngCli','idEmpresaContraCli','idNIT','nombreEmpcli','UPCadicCli','estadoPago'];


	public function scopeSearch1($query, $nuip) // Realiza la busqueda en base de datos de acuerdo al nuip

	{

   	return $query->where('nuip','LIKE',"%$nuip%");


    }

}
