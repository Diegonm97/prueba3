<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuracion';

     protected $fillable=['infoEPS','infoARL','infoAFP','IVA','salarioMinimo'];
}
