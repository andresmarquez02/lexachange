<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\DineroCuenta;
use App\Models\Transferencias;
use Illuminate\Http\Request;

class valanceController extends Controller
{

    public function index()
    {
        $transferencias = Transferencias::where("id_emisor",auth()->user()->id)
        ->orwhere("id_receptor",auth()->user()->id)->get();
        $dinero = DineroCuenta::where("id_user",auth()->user()->id)->value("monto");
        $apps = App::join("transferencia_apps","transferencia_apps.id_app", "=","apps.id")
        ->join("transferencias","transferencias.id", "=","transferencia_apps.id_transferencia")
        ->where("id_user",auth()->user()->id)->get();
        $ids = null;
        $monto_app = collect([]);
        foreach($apps as $app){
            if($ids != $app->id_app){
                $ids = $app->id_app;
                $monto_app->push(["monto" => $apps->where("id_app",$app->id_app)->sum("monto"), "app" => $app->nombre]);
            }
        }
        $total = [
            "actual" => $dinero,
            "transferido" => $transferencias->where("id_emisor",auth()->user()->id)->sum("monto"),
            "han_transferido" => $transferencias->where("id_receptor",auth()->user()->id)->sum("monto"),
            "general_apps" => $apps->sum("monto")
        ];
        return view("users.balance")->with("balances",collect($total))->with("apps",$monto_app);
    }
}
