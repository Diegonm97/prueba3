<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado_empresa extends Model
{
    protected $table = 'empleado_empresa';

    protected $fillable = [
        'id_empresa', 'identificacion', 'tipo_id', 'nombres', 'apellidos',
        'telefono', 'direccion', 'email', 'tipo_cliente', 'fecha_ingreso', 'fecha_nacimiento',
        'salario', 'rango', 'upc', 'id_ciudad', 'id_eps', 'id_arl', 'id_afp', 'id_cjc', 'estado'
    ];

    // Realiza la busqueda en base de datos de acuerdo a la identificación
    public function scopeSearch1($query, $identificacion)              //Buscador por medio de identificacion
    {
        return $query->where('identificacion', 'LIKE', "%$identificacion%");
    }
    public function scopeSearch($query)         //Buscador de toda una tabla

    {
        return $query->select('*');
    }
}
