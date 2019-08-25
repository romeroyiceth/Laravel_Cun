<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['id','numero_cedula', 'nombre', 'apellido', 'email', 'telefono'];
}
