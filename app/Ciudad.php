<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudad';

    protected $fillable = ['nombre', 'codigo'];

    // Realiza la busqueda en base de datos de acuerdo al nuip
    public function scopeSearch1($query, $nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function scopeSearch($query)
    {
        return $query->select('*');
    }
}
