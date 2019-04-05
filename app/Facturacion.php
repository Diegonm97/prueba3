<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    protected $table = 'facturacion';

    protected $fillable = ['id_usuario', 'total_pago', 'tipo'];
}