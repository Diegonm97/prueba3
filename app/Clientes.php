<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'identificacion', 'tipo_id', 'nombres',
        'apellidos', 'telefono', 'direccion', 'email', 'tipo_cliente',
        'fecha_ingreso', 'fecha_nacimiento', 'salario', 'id_ciudad',
        'id_eps', 'id_arl', 'id_afp', 'id_cjc', 'estado', 'beneficio',
        'rango', 'upc', 'inscripcion', 'administracion', 'observacion',
        'id_usuario'
    ];

    // Realiza la busqueda en base de datos de acuerdo a la identificación
    public function scopeSearch1($query, $identificacion)              //Buscador por medio de cliente
    {
        return $query->where('identificacion', 'LIKE', "%$identificacion%");
    }
}
