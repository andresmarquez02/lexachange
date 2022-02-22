<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPerfilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       if(! empty(auth()->user()->id)){
        return true;
       }
       return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|min:1|max:200",
            "contrasena_ac" => "required|min:1|max:200",
        ];
    }
    public function messages(){
        return [
            "name.required" => "El nombre es obligatorio (no debe tener mas de 200 carateres)",
            "name.min" => "El nombre es obligatorio (no debe tener mas de 200 carateres)",
            "name.max" => "El nombre es obligatorio (no debe tener mas de 200 carateres)",
            "contrasena_at.required" => "La contraseña es obligatoria (no debe tener mas de 200 carateres)",
            "contrasena_at.max" => "La contraseña es obligatoria (no debe tener mas de 200 carateres)",
        ];
    }
}
