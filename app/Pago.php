<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pagos';

     protected $fillable=['nuipPago','nombrePago','oficinaPago','telefonoPago','emailPago','salarioPago','EPSpago','AFPpago','ARLpago','cajaCompPago','mesPago','estadoClientePago','sumaPago','interesesPago','sumTotalPago','abonoPago','formaPago','proximoPago','observacionPago','informePago','empresaContPago','costoAdminPago','EMIpago','descuentoPago','UPCadicPago','sevFunePago','inscripcionPago','activacionPago','aporteVoluPago'];

    public function scopeSearch1($query, $nuipPago) 
	{
   	return $query->where('nuipPago','LIKE',"%$nuipPago%");
    }
}

