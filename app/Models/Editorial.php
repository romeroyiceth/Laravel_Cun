<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table='editoriales';

    protected $fillable = ['nit', 'nombre', 'Fecha_Fundacion','editor'];

    //protected $casts=['fecha_fundacion'=>'datetime:Y-m-d'];

    protected $hidden=['create_at','update_at','remember_token'];

    

    public function editores() {
       return $this->hasMany('App\Models\Editor');

    }

    public function setNombreAttribute($value){
        $this->attributes['nombre']=strtoupper($value);
    }
    
    public function getDatosEditorialAttribute(){
    
        return "{$this->id} {$this->nit} {$this->nombre}";  
     }
    
     Protected $appends=[
       'datos_editorial'

     ];
    
     public function getEditorialAttribute(){
      return $this->editores;
  }
    
}
