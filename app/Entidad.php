<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'entidad';

    protected $fillable = ['nombre', 'tipo'];

    // Realiza la busqueda en base de datos de acuerdo al nuip
    public function scopeSearch1($query, $nombre)              //Buscador por medio del nombre
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function scopeSearch($query)         //Buscador de toda una tabla
    
    {
        return $query->select('*');
    }
}
