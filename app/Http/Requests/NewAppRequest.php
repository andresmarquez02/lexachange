<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewAppRequest extends FormRequest
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
            "nombre" => "required|string|max:200",
            "modo" => "required|numeric|min:1|max:2",
        ];
    }
    public function messages(){
        return [
            "nombre.required" => "El nombre es requerido",
            "nombre.string" => "El nombre debe ser string",
            "nombre.max" => "required|string|max:200",
            "modo.required" => "El modo de cuenta es requerido",
            "modo.numeric" => "El modo de cuenta es incorrecto",
            "modo.min" => "El modo de cuenta es incorrecto",
            "modo.max" => "El modo de cuenta es incorrecto",
        ];
    }
}
