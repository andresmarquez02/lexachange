<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TranferirRequest;
use App\Models\App;
use App\Models\DineroCuenta;
use App\Models\IpCuenta;
use App\Models\TipoTransferencia;
use App\Models\TransferenciaApp;
use App\Models\Transferencias;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class transferenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transferencias =Transferencias::join("users","users.id","=","transferencias.id_receptor")
        ->join("tipo_transferencias", "tipo_transferencias.id", "=", "transferencias.id_tipo")
        ->where("id_emisor",auth()->user()->id)
        ->orwhere("id_receptor",auth()->user()->id)
        ->select("users.email","users.name as tiempo","transferencias.*","tipo_transferencias.tipo")
        ->orderBy("created_at","DESC")->paginate(10);
        $send = collect([]);
        for ($i = 0; $i < count($transferencias); $i++) {
             $tiempo = __($transferencias[$i]->created_at->diffForHumans());
             $transferencias[$i]->tiempo = $tiempo;
             $send->push($transferencias[$i]);
        }
        $user = User::join('ip_cuentas','ip_cuentas.id_user','=','users.id')
        ->where('users.id',auth()->user()->id)->select('users.*','ip_cuentas.ip')
        ->first();
        return view("users.transferencias")->with("user",$user)->with("link",$transferencias)
        ->with("transferencias",$send);
    }
    public function tipos()
    {
        return response()->json([TipoTransferencia::all()], 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.transferir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TranferirRequest $request)
    {
        if(Auth::attempt(['email' => auth()->user()->email, 'password' => $request->contrasena])){
            DB::beginTransaction();
            try {
                $user = User::where('email',$request->correo_depositar)->value("id");
                $ip = IpCuenta::where("ip",$request->ip_depositar)->value("id_user");
                if($ip == $user){
                    $mi_cuenta = DineroCuenta::where("id_user",auth()->user()->id)->first();
                    if($mi_cuenta->monto > $request->monto){
                        $new = $request->monto * 5 / 100;
                        $mi_cuenta->decrement("monto", $new + $request->monto);
                        $mi_cuenta->save();
                        $cuenta_receptor = DineroCuenta::where("id_user",$user)->first();
                        $cuenta_receptor->increment('monto',$request->monto);
                        $cuenta_receptor->save();
                        Transferencias::create([
                            "monto" => $request->monto,
                            "monto_total_cuenta_receptor" => $cuenta_receptor->monto,
                            "monto_total_cuenta_emisor" => $mi_cuenta->monto,
                            "comision" => $new,
                            "id_tipo" => $request->tipo,
                            "id_receptor" => $user,
                            "id_emisor" => auth()->user()->id,
                        ]);
                        DB::commit();
                        return back()->with("exito","Transferencia realizada con exito. (mas detalles en la seccion de transferencias)");
                    }
                    else return back()->with("error","Saldo insuficiente");
                }
                else{
                    return back()->with("error","La cuenta y la ip no pertenecen a un usuario");
                }
            } catch (\Throwable $th) {
                DB::rollback();
                return back()->with("error","Error inseperado intente de nuevo");
            }
        }
        else return back()->with("error","Contraseña incorrecta");
    }
    public function transferencia_api (Request $request){
        $user = IpCuenta::where("ip",$request->ip)->first();
        if(!empty($user)){
            $app = App::where("id_user",$user->id_user)->where("api_key",request()->api_key)->first();
            if(empty($app)){
                return response()->json(["mensaje"=>"Error inseperado, tenga cuidado a que empresa desea transferir."], 403);
            }
        }
        DB::beginTransaction();
        try {
            if($request->mi_ip == $request->ip)return response()->json(["mensaje" => "Ips iguales ejecutepagos con otra cuenta."], 200);
            $transferidor = User::where("email",$request->email)->first();
            if(empty($transferidor)) return response()->json(["mensaje"=> "Correo electronico invalido"], 403);
            $valida = IpCuenta::where("id_user",$transferidor->id)->where("ip",$request->mi_ip)->value('created_at');
            if(!empty($valida)){
                $dinero = DineroCuenta::where("id_user",$transferidor->id)->where("monto",">=",$request->monto)->first();
                if(! empty($dinero)){
                    $app = App::where("api_key",$request->api_key)->where("id_user",$user->id_user)->first();
                    if($app->modo == 2){
                        $new = $request->monto * 5 / 100;
                        $dinero->decrement("monto", $new + $request->monto);
                        $dinero->save();
                        $user_cuenta = DineroCuenta::where("id_user",$user->id_user)->first();
                        $user_cuenta->increment('monto',$request->monto);
                        $user_cuenta->save();
                        $id = Transferencias::create([
                            "monto" => $request->monto,
                            "monto_total_cuenta_receptor" => $user_cuenta->monto,
                            "monto_total_cuenta_emisor" => $dinero->monto,
                            "comision" => $new,
                            "id_tipo" => 5,
                            "id_receptor" => $user_cuenta->id_user,
                            "id_emisor" => $dinero->id_user,
                        ]);
                        $id->save();
                        TransferenciaApp::create([
                            "id_app" => $app->id,
                            "id_transferencia" =>$id->id,
                        ]);
                    }
                    else{
                        $user_cuenta = DineroCuenta::where("id_user",$user->id_user)->first();
                        $id = Transferencias::create([
                            "monto" => $request->monto,
                            "monto_total_cuenta_receptor" => $user_cuenta->monto,
                            "monto_total_cuenta_emisor" => $dinero->monto,
                            "comision" => 0,
                            "id_tipo" => 5,
                            "id_receptor" => $user_cuenta->id_user,
                            "id_emisor" => $dinero->id_user,
                        ]);
                        $id->save();
                        TransferenciaApp::create([
                            "id_app" => $app->id,
                            "id_transferencia" => $id->id,
                        ]);
                    }
                    DB::commit();
                    return response()->json(["mensaje" => "Transferencia realizada con exito."], 200);
                }
                else{
                    return response()->json(["mensaje"=>"Saldo insuficiente"], 403);
                }
            }
            else{
                return response()->json(["mensaje"=>"Ip y el correo no coinciden"], 403);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(["mensaje"=>"Verifique si sus datos estan correctos."], 403);
        }
    }
    public function mis_trasferencias(){
        $transferencias =Transferencias::join("users","users.id","=","transferencias.id_receptor")
        ->join("tipo_transferencias", "tipo_transferencias.id", "=", "transferencias.id_tipo")
        ->where("id_emisor",auth()->user()->id)
        ->orwhere("id_receptor",auth()->user()->id)
        ->select("users.email","users.name as tiempo","transferencias.*","tipo_transferencias.tipo")
        ->orderBy("created_at","DESC")->get();
        for ($i = 0; $i < count($transferencias); $i++) {
             $tiempo = __($transferencias[$i]->created_at->diffForHumans());
             $transferencias[$i]->tiempo = $tiempo;
        }
        return response()->json([$transferencias], 200);
    }
}
