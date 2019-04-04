<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'sede';

    protected $fillable = ['nombres', 'id_ciudad', 'telefono', 'direccion'];

    // Realiza la busqueda en base de datos de acuerdo a la id
    public function scopeSearch1($query, $nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function scopeSearch($query)
    {
        return $query->select('*');
    }
}
