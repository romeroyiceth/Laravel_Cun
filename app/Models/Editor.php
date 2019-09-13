<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    protected $table='editores';

    protected $fillable = ['cedula','nombre','apellido','correo','telefono','direccion','contenido_cuenta','editorial_id' ];
   
    //protected $casts=['fecha_nacimiento'=>'datetime:Y-m-d'];

    protected $hidden=['create_at','update_at','remember_token'];

    

public function editoriales(){
        return $this->belongsTo('App\Models\Editorial','editorial_id');
    }

public function setNombreAttribute($value){
    $this->attributes['nombre']=strtoupper($value);
}
public function setApellidoAttribute($value){
    $this->attributes['apellido']=strtoupper($value);
}

public function getNombreCompletoAttribute(){

    return "{$this->nombre} {$this->apellido}";  
}



protected $casts = [
    'contenido_cuenta' => 'array',
];
    
}
