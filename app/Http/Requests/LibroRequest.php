<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Libro;
use App\Http\Requests\LibroRequest;

class LibroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_del_libro'=>'required|min:3|max:30|alpha|mayus',
            'año_publicacion'=>'required',
            'autor_id'=>'required|numeric'
        ];

    }
    public function attributes(){
        return[
            'nombre_del_libro'=>'Nombre del libro',
            'año_publicacion'=>'Año de publicacion',
            'autor_id'=>'Autor'
        ];
    }
    public function messages(){
        return[
            'nombre_del_libro.required'=>'El nombre del libro es solicitado',
            'año_publicacion.required'=>'El año de publicacion es solicitado', 
            'autor_id.required'=>'El autor de publicacion es solicitado', 
            'nombre_del_libro.min'=>'El campo nombre requiere minimo 3 caracteres',
            'nombre_del_libro.alpha_num'=>'EL apellido solo pueden contener letras  o numeros',
            'nombre_del_libro.paces'=>'El nombre del libro debe estar en mayuscula es solicitado',
            
        ];
    }
}
