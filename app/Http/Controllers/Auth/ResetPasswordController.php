<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\User;
use App\Events\SendEmail as EventEmail;

class ResetPasswordController extends Controller
{
    public function reset(Request $request){
        $this->validate($request,["email" => "required|email|exists:users,email"]);
        try {
            $this->validate($request,["email" => "required|email|string|min:1|max:255|exists:users,email",]);
            $user = User::where("email",$request->email)->first();
            $datos = ['id' => $user->id, 'email' => $user->email,'name' => $user->name, 'view' =>'emails/reset'];
            event(new EventEmail($datos));
            return redirect("login")->with("exito","Verifica tu correo y obten una nueva contraseña.");
        } catch (Exception $e) {
            return back()->with("error","Ocurrio un error vuelve a intentar");
        }
    }
}
