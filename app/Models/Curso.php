<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    /*
    protected $table='cursos';

    protected $fillable = ['nombre','fecha_inicio','fecha_final' ];
   

    protected $hidden=['create_at','update_at','remember_token'];

    public function clases() {
        return $this->hasMany('App\Models\Clase');
     }


    public function getInformacionCursoAttribute(){
        return "{$this->nombre}{$this->fecha_inicio}";
    }
   */  
}