<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClaseResource extends JsonResource
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
            'id'=> $this->id,
            'nombre' => $this->nombre,
            'aula' => $this->aula,
            'estado'=> $this->estado,
            //'programas'=>$this->programas,
            'Programas'=> ProgramaResource::collection($this->programas),

            
        ];
    }
}
