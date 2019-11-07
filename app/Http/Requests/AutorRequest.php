<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutorRequest extends FormRequest
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
            'nombre'=>'required|min:3|max:30|alpha_spaces',
            'apellido'=>'required|min:3|alpha_spaces|max:30'
        ];


    }
    public function attributes(){
        return[
            'nombre'=>'Nombres',
            'apellido'=>'Apellidos'
        ];
    }
    public function messages(){
        return[
            'nombre.required'=>'El nombre es solicitado',
            'apellido.required'=>'El apellido es solicitado', 
            'nombre.min'=>'El campo nombre requiere minimo 3 caracteres',
            'apellido.min'=>'El campo apellido requiere minimo 3 caracteres',
            'nombre.alpha_spaces'=>'EL nombre solo pueden contener letras',
            'apellido.alpha_spaces'=>'EL apellido solo pueden contener letras'
        ];
    }
}
