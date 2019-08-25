<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleados';

    protected $fillable = ['id','numero_cedula', 'nombre', 'apellido', 'email','telefono' ];
}
