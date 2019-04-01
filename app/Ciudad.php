<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudad';

    protected $fillable = ['nombre', 'codigo'];

    // Realiza la busqueda en base de datos de acuerdo al nuip
    public function scopeSearch1($query, $nombre)       //Buscador por medio de nombre
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function scopeSearch($query)         //Busqueda de toda una tabla
    {
        return $query->select('*');
    }
}
