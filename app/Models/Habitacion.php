<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    function TipoHabitacion()
    {
        //Con esto recojo datos de otra migración al conectarle y vincularle con esta tabla
        return $this->belongsTo(TipoHabitacion::class, 'tipo_habitacion_id');
    }
}
