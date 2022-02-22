<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use App\Http\Requests\NewAppRequest;
use App\Models\TransferenciaApp;
use Illuminate\Support\Facades\DB;

class developerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("developer.apps");
    }
    public function documentacion()
    {
        return view("developer.documentacion");
    }
    public function apps()
    {
        return view("developer.apps");
    }
    public function mis_apps()
    {
        return response()->json([App::where("id_user",auth()->user()->id)->get()], 200);
    }
    public function app_save(NewAppRequest $request)
    {
        DB::beginTransaction();
        try {
            $exist = 1;
            while($exist >= 1){
                $exist = App::where("api_key", $this->generador())->count();
                $api = $this->generador();
            }
            App::create([
                "nombre" => $request->nombre,
                "api_key" => $api,
                "modo" => $request->modo,
                "id_user" => auth()->user()->id,
            ]);
            DB::commit();
            return back()->with("exito", "Aplicacion creada con exito");
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with("error", "Error inesperado intenta nuevamente");
        }
    }
    public function generador (){
        $pattern ="A%BCDEFGH@IJKLMNOP#QRSTUVWXYZabcdef#ghijkl@mnopqrstuvwxyz1234567890#_";
        $token = substr(str_shuffle($pattern), 0, 30);
        return $token;
    }
    public function sobre()
    {
        return view("users.sobre");
    }
    public function ver_app($id)
    {
        $app =App::where("id",$id)->where("id_user",auth()->user()->id)->first();
        if(empty($app))return back();
        $transferencias = TransferenciaApp::join("transferencias", "transferencias.id", "=","transferencia_apps.id_transferencia")
        ->join("users","users.id","=","transferencias.id_receptor")
        ->join("tipo_transferencias", "tipo_transferencias.id", "=", "transferencias.id_tipo")
        ->where("id_app",$id)
        ->select("users.email","users.name as tiempo","transferencias.*","tipo_transferencias.tipo")
        ->orderBy("created_at","DESC")->get();
        for ($i = 0; $i < count($transferencias); $i++) {
            $tiempo = __($transferencias[$i]->created_at->diffForHumans());
            $transferencias[$i]->tiempo = $tiempo;
        }
        return view("developer.verApp")->with("app",$app)->with("transferencias",$transferencias);
    }
    public function update(NewAppRequest $request, $id)
    {
        App::where("id",$id)->where("id_user",auth()->user()->id)->update([
            "nombre" => $request->nombre,
            "modo" => $request->modo,
        ]);
        return back()->with("exito", "Aplicacion editada con exito");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        App::find($id)->delete();
        return response()->json([], 200);
    }
}
