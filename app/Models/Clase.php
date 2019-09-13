<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
  /*
    protected $table='clases';

    protected $fillable = ['nombre','aula','estado','curso_id' ];
   
    

    protected $hidden=['create_at','update_at','remember_token'];

    public function recursos() {
        return $this->hasMany('App\Models\Recurso');
 
     }
     public function cursos(){
        return $this->belongsTo('App\Models\Curso');
    }
    
    public function getDatosClaseAttribute(){
    
        return "{$this->id} {$this->nombre} {$this->aula} {$this->curso_id}";  
     }
    
     Protected $appends=[
       'datos_clase',


     ];

     protected $casts = [
      'estado' => 'boolean',
  ];
  */
}
