<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    function TipoServicio()
    {
        //Con esto recojo datos de otra migración al conectarle y vincularle con esta tabla
        return $this->belongsTo(TipoServicio::class, 'tipo_servicio_id');
    }
}
