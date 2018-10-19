<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

     protected $fillable=['nuip','nombreEmpresaContraCli','nombreCli','tipoIdCli','direccionCli','oficinaCli','ciudadCli','telefonoCli','emailCli','fechaNacCli','salarioCli','rangoCli','nombreEpsCli','ARLcli','AFPcli','EPScli','cajaCompCli','beneficioCli','fechaIngresoCli','idEmpresaContraCli','idNIT','UPCadicCli','estadoPago'];
}
