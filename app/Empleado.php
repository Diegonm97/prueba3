<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';

    protected $fillable = ['nombre_completo', 'estado', 'id_usuario', 'id_sede', 'email'];

    public function scopeSearch($query)
    {
        return $query->select('*');
    }
}







