<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';

    protected $fillable = ['id_usuario', 'estado', 'dia', 'mes', 'tipo'];

    public function scopeSearch1($query, $id_usuario)
    {
        return $query->where('id_usuario', 'LIKE', "%$id_usuario%");
    }
}
