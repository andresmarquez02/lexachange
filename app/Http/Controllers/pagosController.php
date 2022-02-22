<?php

namespace App\Http\Controllers;

use App\Models\DineroCuenta;
use Illuminate\Http\Request;

class pagosController extends Controller
{
    public function pagar(Request $request){
        DineroCuenta::where("id_user",auth()->user()->id)->increment("monto",$request->cantidad);
    }
}
