<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TranferirRequest extends FormRequest
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
            "correo_depositar" => "required|min:1|max:200|email|exists:users,email",
            "ip_depositar" => "required|min:1|max:25|string|exists:ip_cuentas,ip",
            "monto" => "required|numeric|min:1",
            "tipo" => "required|numeric|min:1|exists:tipo_transferencias,id",
            "contrasena" => "required|string|min:8|max:200"
        ];
    }
    public function messages(){
        return [
            "correo_depositar.required" => "El correo a depositar en requerido",
            "correo_depositar.max" => "El correo a depositar no puede tener tantos caracteres",
            "correo_depositar.exists" => "Este correo al que quire depositar no existe",
            "ip_depositar.required" => "La ip de deposito es requerida",
            "ip_depositar.max" => "La ip de deposito es incorrecta",
            "ip_depositar.exists" => "La ip de deposito a la que quiere transferir no ha sido asignada",
            "monto.required" => "El monto es requerido",
            "monto.numeric" => "El monto es incorrecto",
            "monto.min" => "El monto es incorrecto",
            "tipo.required" => "El tipo de transferencia es requerido",
            "tipo.numeric" => "El tipo de transferencia es incorreto",
            "tipo.exists" => "El tipo de transferencia es incorreto",
            "contrasena.required" => "La contraseña es requerida",
            "contrasena.min" => "La contraseña es incorrecta",
            "contrasena.max" => "La contraseña es incorrecta",
        ];
    }
}
