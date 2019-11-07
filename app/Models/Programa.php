<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table='programas';

    protected $fillable = ['registro','nombre','informacion_programa','clase_id' ];
   

    protected $hidden=['create_at','update_at','remember_token'];
    
    public function clase(){
        return $this->belongsTo('App\Models\Clase','clase_id');
    }
    
public function setNombreAttribute($value){
    $this->attributes['nombre']=ucfirst($value);
}

 protected $casts = [
    'informacion_programa'=>'array'
];
 
}
