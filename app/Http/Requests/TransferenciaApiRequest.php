<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\IpCuenta;
use App\App;

class TransferenciaApiRequest extends FormRequest
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
    public function rules()
    {
        return [
            "mi_ip" => "required|min:25|max:25|exists:ip_cuentas,ip",
            "email" => "required|email|exists:users,email",
            "api_key" => "required|min:30|max:30|exists:apps,api_key",
            "ip" => "required|min:25|max:25|exists:ip_cuentas,ip",
            "monto" => "required|numeric|min:1"
        ];
    }
}
