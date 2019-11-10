<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CursoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'nombre'=>$this->nombre,
            'fecha_inicio'=>$this->fecha_inicio,
            'fecha_final'=>$this->fecha_final,
            //'Clases'=>$this->clases,
            //'Programas'=>$this->programas,
            'Clases'=> ClaseResource::collection($this->clases),
            'Programas'=> ProgramaResource::collection($this->programas),
        ];
    }
}
