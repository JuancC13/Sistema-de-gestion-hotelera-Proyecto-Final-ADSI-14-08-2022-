<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    function TipoEmpleado()
    {
        //Con esto recojo datos de otra migración al conectarle y vincularle con esta tabla
        return $this->belongsTo(TipoEmpleado::class, 'tipo_empleado_id');
    }
}
