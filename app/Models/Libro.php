<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table='libros';

    protected $fillable = ['id', 'nombre_del_libro', 'año_publicacion','autor_id' ];
   
    
   
    public function autores(){
        return $this->belongsTo('App\Models\Autor','autor_id');
    }
}
