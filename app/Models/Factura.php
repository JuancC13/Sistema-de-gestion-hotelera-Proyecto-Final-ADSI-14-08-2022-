<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;


    function Habitacion()
    {
        //Con esto recojo datos de otra migración al conectarle y vincularle con esta tabla
        return $this->belongsTo(Habitacion::class, 'habitacion_id');
    }

    function Empleado()
    {
        //Con esto recojo datos de otra migración al conectarle y vincularle con esta tabla
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    function Cliente()
    {
        //Con esto recojo datos de otra migración al conectarle y vincularle con esta tabla
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
    
    function Servicio()
    {
        //Con esto recojo datos de otra migración al conectarle y vincularle con esta tabla
        return $this->belongsTo(Servicio::class, 'servicios_id');
    }
    
    function TipoServicio()
    {
        //Con esto recojo datos de otra migración al conectarle y vincularle con esta tabla
        return $this->belongsTo(TipoServicio::class, 'tipo_servicios_id');
    }

}
