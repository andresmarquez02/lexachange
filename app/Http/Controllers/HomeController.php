<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditPerfilRequest;
use App\Models\DineroCuenta;
use App\Models\IpCuenta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(! Cache::has('monto'))Cache::forever('monto', DineroCuenta::where("id_user",auth()->user()->id)->value("monto"));
        return view('users.home');
    }
    public function send(Request $request){
        return redirect('/')->with('exito',"Mensaje enviado exitosamente");
    }
    public function retirar()
    {
        return view('users.retirar');
    }
    public function perfil()
    {
        return view('users.perfil');
    }
    public function usuario()
    {
        $user = User::leftjoin('ip_cuentas','ip_cuentas.id_user','=','users.id')
        ->where('users.id',auth()->user()->id)->select('users.*','ip_cuentas.ip')
        ->first();
        return response()->json([$user], 200);
    }
    public function perfil_save(EditPerfilRequest $request)
    {
        if(Auth::attempt(['email' => auth()->user()->email, 'password' => $request->contrasena_ac])){
            DB::beginTransaction();
            try {
                if(!empty($request->contrasena)){
                    $this->validate($request,[
                        "contrasena" => "required|min:1|max:200|confirmed",
                    ],[
                        "contrasena.required" => "La contraseña es obligatoria (no debe tener mas de 200 carateres)",
                        "contrasena.confirmed" => "Las contraseñas no son iguales",
                    ]);
                    User::where("id",auth()->user()->id)->update([
                        "name" => $request->name,
                        "password" => bcrypt($request->contrasena)
                    ]);
                    DB::commit();
                    return back()->with("exito","Informacion actualizada con exito");
                }
                else{
                    User::where("id",auth()->user()->id)->update([
                        "name" => $request->name
                    ]);
                    DB::commit();
                    return back()->with("exito","Informacion actualizada con exito");
                }
            } catch (\Throwable $th) {
                DB::rollback();
                return back()->with("error","Error inesperado intenta de nuevo");
            }
        }
        else{
            return back()->with("error","Contraseña incorrecta");
        }
    }
    public function solicitud_cod()
    {
        $ip = User::join('ip_cuentas','ip_cuentas.id_user','=','users.id')
        ->where('users.id',auth()->user()->id)->value('ip');
        if(empty($ip)){
            $exist = 1;
            while($exist >= 1){
                $exist = IpCuenta::where("ip", $this->generador())->count();
                $token = $this->generador();
            }
            IpCuenta::create([
                "ip" => $token,
                "id_user" => auth()->user()->id
            ]);
            return back()->with('exito','Ip creada con exito');
        }
        return back()->with('error','Usted ya cuenta con una ip de transferencias');
    }
    public function generador (){
        $pattern ="A%BCDEFGH@IJKLMNOP#QRSTUVWXYZabcdef#ghijkl@mnopqrstuvwxyz1234567890#_";
        $token = substr(str_shuffle($pattern), 0, 25);
        return $token;
    }
    public function salir(){
        Auth::logout();
        session()->flush();
        Cache::flush();
        return redirect("/");
    }
}
